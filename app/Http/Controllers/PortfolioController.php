<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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

        // Get the path to the project folder
        $projectFolder = public_path('img/portfolio/' . $portfolio->title);

        // Check if the folder exists
        if (File::exists($projectFolder) && File::isDirectory($projectFolder)) {
            // Get all files (images) in the project folder
            $images = File::files($projectFolder);

            // Sort the images based on their file names (assuming file names are integers)
            usort($images, function ($a, $b) {
                return intval(pathinfo($a->getFilename(), PATHINFO_FILENAME)) - intval(pathinfo($b->getFilename(), PATHINFO_FILENAME));
            });
        } else {
            // If the folder doesn't exist, pass an empty array
            $images = [];
        }

        // Pass the images array to the view
        return view('portfolio-details', compact('pageTitle', 'portfolio', 'images'));
    }
}
