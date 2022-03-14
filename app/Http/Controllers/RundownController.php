<?php

namespace App\Http\Controllers;

use App\Models\Rundown;
use Illuminate\Http\Request;

class RundownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rundowns = Rundown::latest()->paginate(10);
        return view('admin.rundown', compact('rundowns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Rundown  $rundown
     * @return \Illuminate\Http\Response
     */
    public function show(Rundown $rundown)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rundown  $rundown
     * @return \Illuminate\Http\Response
     */
    public function edit(Rundown $rundown)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rundown  $rundown
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rundown $rundown)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rundown  $rundown
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rundown $rundown)
    {
        //
    }
}
