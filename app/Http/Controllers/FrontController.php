<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Rundown;
use App\Models\Careerfair;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FrontController extends Controller
{
    
    public function index()
    {
        $aocf = Careerfair::where('status', 'active')->latest()->first();
        $partners = Partner::where([
            ['status', 'active'],
            ['position', '1'],
            ['careerfair_id', $aocf->id],
        ])->get();
        

        $participant = Partner::where([
            ['status', 'active'],
            ['position', '2'],
            ['careerfair_id', $aocf->id],
        ])->get();
        
        $rundown = Rundown::where([
            ['status', 'active'],
            ['careerfair_id', $aocf->id],
        ])->get();
        $rundown->map(function ($rd) {
            $rd->time = Carbon::parse($rd->time)->format('l, d M Y');
            return $rd;
        });
        $countpartner = Partner::where('status', 'active')->count();
        $countevent = Event::where('status', 'active')->count();
        $gallery = Gallery::where('status', 'active')->take(3)->get();
        
        $faqs = Faq::where('status', 'active')->get();
        return view('landing-page.landing', compact('aocf', 'partners', 'rundown', 'countpartner', 'countevent', 'gallery', 'faqs', 'participant'));
        
    }
    public function about()
    {
        $aocf = Careerfair::where('status', 'active')->latest()->first();
        
        $partners = Partner::where([
            ['status', 'active'],
            ['position', '1'],
            ['careerfair_id', $aocf->id],
        ])->get();
        $participant = Partner::where([
            ['status', 'active'],
            ['position', '2'],
            ['careerfair_id', $aocf->id],
        ])->get();
        return view('landing-page.about',compact('aocf', 'partners', 'participant'));
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
