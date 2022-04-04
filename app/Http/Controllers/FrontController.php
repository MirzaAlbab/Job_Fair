<?php

namespace App\Http\Controllers;

use App\Models\Careerfair;
use App\Models\Faq;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Rundown;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    
    public function index()
    {
        $aocf = Careerfair::where('status', 'active')->first();
        // $partners = Partner::where(
        //     ['status','active'],
        //     [Partner::AOCF->status,'active'])->get();
        $partners = Partner::where([
            ['status', 'active'],
            ['position', '1'],
            ['careerfair_id', $aocf->id],
        ])->get();
        $rundown = Rundown::all();
        $countpartner = Partner::where('status', 'active')->count();
        $countevent = Event::where('status', 'active')->count();
        $gallery = Gallery::where('status', 'active')->take(3)->get();
        $faqs = Faq::where('status', 'active')->get();
        

        return view('landing-page.landing', compact('aocf', 'partners', 'rundown', 'countpartner', 'countevent', 'gallery', 'faqs'));
        
    }
    public function about()
    {
        $aocf = Careerfair::where('status', 'active')->first();
        $partners = Partner::where([
            ['status', 'active'],
            ['position', '1'],
            ['careerfair_id', $aocf->id],
        ])->get();
        return view('landing-page.about',compact('partners'));
    }
    public function partner()
    {
        $partners = Partner::where('status','active')->latest()->paginate(10);
        return view('landing-page.partners', compact('partners'));
    }
    public function singlepartner($id)
    {
        $sidebar = Partner::latest()->get();
        $partner = Partner::findorFail($id);
        return view('landing-page.single-partner', compact('partner', 'sidebar'));
    }
    public function events()
    {
        $events = Event::where('status','active')->latest()->paginate(10);
        return view('landing-page.event', compact('events'));
    }
    public function eventdetail($id)
    {
        $event = Event::find($id);
        return view('landing-page.event-details', compact('event'));
    }
    public function gallery()
    {
        $gallery = Gallery::where('status', 'active')->latest()->get();
        return view('landing-page.gallery', compact('gallery'));
    }

}
