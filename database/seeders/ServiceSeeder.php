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
                'description' => 'Whether you re in the midst of coding or just starting your web development journey, our services can assist you in putting the finishing touches on your projects.',
                'image' => 'si-1.png',
            ],
            [
                'title' => 'Internet of Things',
                'description' => 'Improve the connectivity and functionality of your IoT devices with our expertise, whether you re halfway through the development process or just beginning.',
                'image' => 'si-2.png',
            ],
            [
                'title' => 'Responsive Design',
                'description' => 'Ensure your websites look great on all devices by incorporating responsive design. Whether you re midway through development or just starting out, we can help.',
                'image' => 'si-3.png',
            ],
            [
                'title' => 'E-commerce Solutions',
                'description' => 'Implement powerful e-commerce solutions in your web development projects. Whether you\'re in the editing phase or just beginning, our post-production services can add the final touches.',
                'image' => 'si-4.png',
            ],
            [
                'title' => 'Content Management Systems',
                'description' => 'Whether you\'re halfway through developing your CMS or just starting, our services can contribute to the completion of your web development projects.',
                'image' => 'si-5.png',
            ],
            [
                'title' => 'Database Management',
                'description' => 'Ensure efficient data handling and storage with our database management expertise. Whether you\'re midway through development or just starting out, we\'ve got you covered.',
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
