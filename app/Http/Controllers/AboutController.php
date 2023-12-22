<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $pageTitle = 'About Me';
        $experiences = Experience::all(); // Assuming you have an Experience model

        return view('about', compact('pageTitle', 'experiences'));
    }
}
