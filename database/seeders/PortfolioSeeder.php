<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    public function run()
    {
        // Example portfolios
        $portfolios = [
            [
                'title' => 'PLBN-SOTA',
                'description' => 'Description Comingsoon.',
                'image' => 'portfolio-1.jpg',
                'youtube_link' => 'https://www.youtube.com/embed/9jo51nJrO0k?si=PSKnvn6I9PLrlPDN',
                'website_link' => 'https://plbnsota.com/',
                'github_link' => 'https://github.com/Jaenulatif/plbn-sota',
                'category' => 'Web', // Adjust the category
            ],
            [
                'title' => 'YAMAI-ATID',
                'description' => 'Description Comingsoon.',
                'image' => 'portfolio-2.jpg',
                'youtube_link' => 'https://www.youtube.com/embed/9jo51nJrO0k?si=PSKnvn6I9PLrlPDN',
                'website_link' => 'https://yamai-atid.site/',
                'github_link' => 'https://github.com/hafidzasqalany28/yamai-atid',
                'category' => 'Web', // Adjust the category
            ],
            [
                'title' => 'OMART',
                'description' => 'Description Comingsoon.',
                'image' => 'portfolio-3.jpg',
                'youtube_link' => 'https://www.youtube.com/embed/9jo51nJrO0k?si=PSKnvn6I9PLrlPDN',
                'website_link' => 'https://finalprojectx.site/',
                'github_link' => 'https://github.com/hafidzasqalany28/omart',
                'category' => 'eCommerce', // Adjust the category
            ],
            [
                'title' => 'CRM',
                'description' => 'Description Comingsoon.',
                'image' => 'portfolio-4.jpg',
                'youtube_link' => 'https://www.youtube.com/embed/9jo51nJrO0k?si=PSKnvn6I9PLrlPDN',
                'website_link' => 'https://crm-ubijalar.finalprojectx.site/',
                'github_link' => 'https://github.com/hafidzasqalany28/CRM',
                'category' => 'eCommerce', // Adjust the category
            ],
            [
                'title' => 'MARO-BARBERSHOP',
                'description' => 'Description Comingsoon.',
                'image' => 'portfolio-5.jpg',
                'youtube_link' => 'https://www.youtube.com/embed/9jo51nJrO0k?si=PSKnvn6I9PLrlPDN',
                'website_link' => 'https://maro-barbershop.finalprojectx.site/',
                'github_link' => 'https://github.com/hafidzasqalany28/maro-barbershop',
                'category' => 'Web', // Adjust the category
            ],
            // Add more projects as needed
        ];

        // Insert portfolios into the database
        foreach ($portfolios as $portfolio) {
            Portfolio::create($portfolio);
        }
    }
}
