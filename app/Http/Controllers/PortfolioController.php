<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    public function index()
    {
        $pageTitle = 'Portfolio';
        $itemsPerPage = 6;
        $totalPortfolios = Portfolio::count();
        $currentPage = request()->input('page', 1);

        $portfolios = DB::table('portfolios')
            ->skip(($currentPage - 1) * $itemsPerPage)
            ->take($itemsPerPage)
            ->get();

        return view('portfolio', compact('pageTitle', 'portfolios', 'totalPortfolios', 'itemsPerPage', 'currentPage'));
    }

    public function show($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $pageTitle = $portfolio->title;
        return view('portfolio-details', compact('pageTitle', 'portfolio'));
    }
}
