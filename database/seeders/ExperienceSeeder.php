<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    public function run()
    {
        // Example experiences
        $experiences = [
            [
                'title' => 'Front End Developer',
                'description' => 'Performed updates on the website interface for PT. Surabaya Noor Leather company profile. Designed a new Database for Leather Crafts at the company.',
                'company' => 'PT. SURABAYA NOOR LEATHER',
                'start_date' => '2020-09-01',
                'end_date' => '2020-10-01',
            ],
            [
                'title' => 'Administration Staff',
                'description' => 'Created documents related to the export process, generated daily and monthly financial reports for the company, handled taxes such as PPH 21, PPH 22, and PPH 23 for the company.',
                'company' => 'PT. BAWAZIR INDO UTAMA',
                'start_date' => '2022-11-01',
                'end_date' => null, // Currently still employed
            ],
            [
                'title' => 'Full Stack Developer',
                'description' => 'Developed software projects, designed a responsive user interface using HTML, CSS, and JavaScript (Bootstrap), and built the server and business logic using JavaScript (Node.js) and PHP (Laravel).',
                'company' => 'FREELANCE',
                'start_date' => '2021-12-01',
                'end_date' => null, // Currently still employed
            ],
            // Add more experiences as needed
        ];

        // Insert experiences into the database
        foreach ($experiences as $experience) {
            Experience::create($experience);
        }
    }
}
