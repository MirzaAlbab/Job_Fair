<?php

namespace App\Http\Controllers;

use App\Models\Careerfair;
use Illuminate\Http\Request;

class CareerfairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Careerfair::latest()->paginate(10);
        return view('admin.career-fair', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.career-fair-new');
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
            'tglmulai' => 'required',
            'deskripsi' => 'required',
            'tglselesai' => 'required',
            'status' => 'required',
        ]);
        $image  = $request->file('poster');
        $result = CloudinaryStorage::upload($image->getPathname(), $image->getClientOriginalName());

        Careerfair::create([
            'title' => $request->judul,
            'description' => $request->deskripsi,
            'start_date' => $request->tglmulai,
            'end_date' => $request->tglselesai,
            'img' => $result,
            'status' => $request->status,
        ]);
        return redirect('/career-fair')->with('status', 'Career Fair berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Careerfair  $careerfair
     * @return \Illuminate\Http\Response
     */
    public function show(Careerfair $careerfair)
    {

        return view('admin.career-fair-view', compact('careerfair'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Careerfair  $careerfair
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $careerfair = Careerfair::find($id);
        // dd($request->id);
        return view('admin.career-fair-update', compact('careerfair'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Careerfair  $careerfair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Careerfair $careerfair)
    {
        if($request->file('poster')){
            $file   = $request->file('poster');
            $result = CloudinaryStorage::replace($careerfair->img, $file->getRealPath(), $file->getClientOriginalName());
        } else {
            $result = $careerfair->img;
        }
        Careerfair::where('id', $careerfair->id)
                ->update([
                    'title' => $request->judul,
                    'start_date' => $request->tglmulai,
                    'end_date' => $request->tglselesai,
                    'img' => $result,
                    'status' => $request->status,
                ]);
        return redirect('/career-fair')->with('status', 'Career Fair berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Careerfair  $careerfair
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Careerfair::destroy($id);
        return redirect('/career-fair')->with('status', 'Career Fair berhasil dihapus');
    }
}
