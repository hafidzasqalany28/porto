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
                'description' => 'Melakukan pembaruan pada tampilan website profil perusahaan PT. Surabaya Noor Leather. Merancang Database baru untuk Kerajinan Kulit pada perusahaan.',
                'company' => 'PT. SURABAYA NOOR LEATHER',
                'start_date' => '2020-09-01',
                'end_date' => '2020-10-01',
            ],
            [
                'title' => 'Staff Administrasi Umum',
                'description' => 'Membuat dokumen terkait proses ekspor barang, membuat laporan keuangan harian dan bulanan perusahaan, menghandle pajak pph 21, pph 22, dan pph 23 perusahaan.',
                'company' => 'PT. BAWAZIR INDO UTAMA',
                'start_date' => '2022-11-01',
                'end_date' => null, // Saat ini masih bekerja
            ],
            [
                'title' => 'Full Stack Developer',
                'description' => 'Mengembangkan proyek perangkat lunak, merancang antarmuka pengguna responsif menggunakan HTML, CSS, dan JavaScript (Bootstrap), serta membangun server dan logika bisnis menggunakan JavaScript (Node.js) dan PHP (Laravel).',
                'company' => 'FREELANCE',
                'start_date' => '2021-12-01',
                'end_date' => null, // Saat ini masih bekerja
            ],
            // Add more experiences as needed
        ];

        // Insert experiences into the database
        foreach ($experiences as $experience) {
            Experience::create($experience);
        }
    }
}
