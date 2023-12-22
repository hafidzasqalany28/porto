<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $pageTitle = 'About Us';
        return view('about', compact('pageTitle'));
    }
}
