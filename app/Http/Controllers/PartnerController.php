<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CloudinaryStorage;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::latest()->paginate(10);
        return view('admin.partner', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner-new');
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
            'nama' => 'required',
            'periode' => 'required',
            'jenis' => 'required',
            'status' => 'required',
        ]);
        $image  = $request->file('logo');
        $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());

        Partner::create([
            'company' => $request->nama,
            'position' => $request->jenis,
            'img' => $result,
        ]);
        return redirect('/partner')->with('status', 'Partner berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        return view('admin.partner-view', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('admin.partner-update', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        if($request->file('logo')){
            $file   = $request->file('logo');
            $result = CloudinaryStorage::replace($partner->img, $file->getRealPath(), $file->getClientOriginalName());
        } else {
            $result = $partner->img;
        }
        Partner::where('id', $partner->id)
                ->update([
                    'company' => $request->nama,
                    'position' => $request->jenis,
                    'img' => $result,
                ]);
        return redirect('/partner')->with('status', 'Partner berhasil diperbarui');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        CloudinaryStorage::delete($image->image);
        $image->delete();
        Partner::destroy($id);
        return redirect('/partner')->with('status', 'Partner berhasil dihapus');
    }
}
