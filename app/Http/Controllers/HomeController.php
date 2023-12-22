<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pageTitle = 'Home';
        $services = Service::take(4)->get();

        // Fetch the latest 4 portfolio items
        $portfolios = Portfolio::latest()->take(6)->get();

        return view('index', compact('pageTitle', 'services', 'portfolios'));
    }
}
