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

        // Fetch the latest 4 services
        $services = Service::latest()->take(4)->get();

        // Fetch the latest 6 portfolio items
        $portfolios = Portfolio::latest()->take(6)->get();

        // Simulate portfolio statistics (ganti ini dengan logika sesuai data yang sebenarnya)
        $portfolioStatistics = [
            'projectsTaken' => 5,
            'happyClients' => 5,
            'perspectiveClients' => 5,
            'completedProjects' => 5,
        ];

        return view('index', compact('pageTitle', 'services', 'portfolios', 'portfolioStatistics'));
    }
}
