<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::latest()->paginate(10);
        return view('admin.gallery', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'status' => 'required',
        ]);
        $image  = $request->file('dokumentasi');
        $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());

        Gallery::create([
            'title' => $request->judul,
            'img' => $result,
            'status' => $request->status,
        ]);
        return redirect('/gallery')->with('status', 'Galeri berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        return view('admin.gallery-view', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery-update', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        if($request->file('dokumentasi')){
            $file   = $request->file('dokumentasi');
            $result = CloudinaryStorage::replace($gallery->img, $file->getRealPath(), $file->getClientOriginalName());
        } else {
            $result = $gallery->img;
        }
        Gallery::where('id', $gallery->id)
                ->update([
                    'title' => $request->judul,
                    'img' => $result,
                    'status' => $request->status,
                ]);
        return redirect('/gallery')->with('status', 'Galeri berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Gallery $gallery)
    {
        $id = $request->id;
        Gallery::destroy($id);
        return redirect('/gallery')->with('status', 'Galeri berhasil dihapus');
    }
}
