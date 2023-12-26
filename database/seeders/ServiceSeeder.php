<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        // Example services
        $services = [
            [
                'title' => 'Web Development',
                'description' => 'Whether you\'re deep into coding or just embarking on your web development journey, let me assist you in perfecting your projects.',
                'image' => 'si-1.png',
            ],
            [
                'title' => 'Internet of Things',
                'description' => 'Enhance the connectivity and functionality of your IoT devices with my expertise, whether you\'re in the middle of the development process or just getting started.',
                'image' => 'si-2.png',
            ],
            [
                'title' => 'Responsive Design',
                'description' => 'Ensure your websites look stunning on all devices by integrating responsive design. Whether you\'re midway through development or just starting out, I can help.',
                'image' => 'si-3.png',
            ],
            [
                'title' => 'E-commerce Solutions',
                'description' => 'Implement powerful e-commerce solutions in your web development projects. Whether you\'re in the editing phase or just beginning, my post-production services can add the final touches.',
                'image' => 'si-4.png',
            ],
            [
                'title' => 'Content Management Systems',
                'description' => 'Contribute to the completion of your web development projects, whether you\'re halfway through developing your CMS or just starting. Let\'s create something amazing together.',
                'image' => 'si-5.png',
            ],
            [
                'title' => 'Database Management',
                'description' => 'Ensure efficient data handling and storage with my database management expertise. Whether you\'re midway through development or just starting out, I\'ve got you covered.',
                'image' => 'si-6.png',
            ],

            // Add more services as needed
        ];

        // Insert services into the database
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
