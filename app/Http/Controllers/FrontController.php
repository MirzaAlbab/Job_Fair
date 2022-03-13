<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Partner;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('landing-page.landing');
        
    }
    public function about()
    {
        return view('landing-page.about');
    }
    public function partner()
    {
        $partners = Partner::latest()->paginate(10);
        return view('landing-page.partners', compact('partners'));
    }
    public function singlepartner()
    {
        $partners = Partner::latest()->paginate(10);
        return view('landing-page.single-partner', compact('partners'));
    }
    public function events()
    {
        $event = Event::latest()->paginate(10);
        return view('landing-page.event', compact('event'));
    }
    public function eventdetail()
    {
        $event = Event::latest()->paginate(10);
        return view('landing-page.event-details', compact('event'));
    }
    public function gallery()
    {
        return view('landing-page.gallery');
    }

}
