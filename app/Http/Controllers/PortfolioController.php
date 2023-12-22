<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $pageTitle = 'Portfolio';
        return view('portofolio', compact('pageTitle'));
    }
}
