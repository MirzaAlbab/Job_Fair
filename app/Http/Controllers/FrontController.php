<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function partner()
    {
        $partners = Partner::latest()->paginate(10);
        return view('landing-page.partners', compact('partners'));
    }
}
