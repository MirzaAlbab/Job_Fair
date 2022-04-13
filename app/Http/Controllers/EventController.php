<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest()->get();

        return view('admin.event', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event-new');
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
            'deskripsi' => 'required',
            'waktu' => 'required',
            'link' => 'required',
            'status' => 'required',
        ]);
        $image  = $request->file('poster');
        $result = CloudinaryStorage::upload($image->getPathname(), $image->getClientOriginalName());

        Event::create([
            'title' => $request->judul,
            'description' => $request->deskripsi,
            'time' => $request->waktu,
            'link' => $request->link,
            'img' => $result,
            'status' => $request->status,
        ]);
        return redirect('/event')->with('status', 'Event berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('admin.event-view', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.event-update', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'waktu' => 'required',
            'link' => 'required',
            'status' => 'required',
        ]);
        if($request->file('poster')){
            $file   = $request->file('poster');
            $result = CloudinaryStorage::replace($event->img, $file->getPathname(), $file->getClientOriginalName());
        } else {
            $result = $event->img;
        }
        Event::where('id', $event->id)
                ->update([
                    'title' => $request->judul,
                    'description' => $request->deskripsi,
                    'time' => $request->waktu,
                    'link' => $request->link,
                    'img' => $result,
                    'status' => $request->status,
                ]);
        return redirect('/event')->with('status', 'Event berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Event::destroy($id);
        return redirect('/event')->with('status', 'Event berhasil dihapus');
    }
}
