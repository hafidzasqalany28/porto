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
                'title' => 'Project 1',
                'description' => 'Description for Project 1.',
                'image' => 'portfolio-1.jpg',
                'youtube_link' => 'https://www.youtube.com/watch?v=LXb3EKWsInQ',
                'website_link' => 'https://www.example.com/project1',
                'github_link' => 'https://github.com/username/project1',
                'category' => 'Web', // Adjust the category
            ],
            [
                'title' => 'Project 2',
                'description' => 'Description for Project 2.',
                'image' => 'portfolio-2.jpg',
                'youtube_link' => 'https://www.youtube.com/watch?v=ABCDEFGHIJK',
                'website_link' => 'https://www.example.com/project2',
                'github_link' => 'https://github.com/username/project2',
                'category' => 'IOT', // Adjust the category
            ],
            [
                'title' => 'Project 3',
                'description' => 'Description for Project 3.',
                'image' => 'portfolio-3.jpg',
                'youtube_link' => 'https://www.youtube.com/watch?v=ABCDEFGHIJK',
                'website_link' => 'https://www.example.com/project3',
                'github_link' => 'https://github.com/username/project3',
                'category' => 'eCommerce', // Adjust the category
            ],
            [
                'title' => 'Project 4',
                'description' => 'Description for Project 4.',
                'image' => 'portfolio-4.jpg',
                'youtube_link' => 'https://www.youtube.com/watch?v=ABCDEFGHIJK',
                'website_link' => 'https://www.example.com/project4',
                'github_link' => 'https://github.com/username/project4',
                'category' => 'eCommerce', // Adjust the category
            ],
            [
                'title' => 'Project 5',
                'description' => 'Description for Project 5.',
                'image' => 'portfolio-5.jpg',
                'youtube_link' => 'https://www.youtube.com/watch?v=ABCDEFGHIJK',
                'website_link' => 'https://www.example.com/project5',
                'github_link' => 'https://github.com/username/project5',
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
