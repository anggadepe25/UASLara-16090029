<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $tour=Tour::where('status','1')->get();

        return view('frontend.default', compact('tour'));
    }

    public function detail($id)
    {
        $tour=Tour::find($id);
        return view('frontend.partials.detail', compact('tour'));
    }
}
