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
        //
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
    public function edit(Careerfair $careerfair)
    {
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Careerfair  $careerfair
     * @return \Illuminate\Http\Response
     */
    public function destroy(Careerfair $careerfair)
    {
        //
    }
}
