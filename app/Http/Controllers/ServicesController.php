<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $pageTitle = 'Services';
        return view('services', compact('pageTitle'));
    }
}
