<?php

namespace App\Http\Controllers;

use App\Models\Service; // Import the Service model
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $pageTitle = 'Services';
        $services = Service::all(); // Fetch services from the database

        return view('services', compact('pageTitle', 'services'));
    }
}
