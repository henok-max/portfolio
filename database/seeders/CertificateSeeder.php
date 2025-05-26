<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Certificate;  // Add this line

class CertificateSeeder extends Seeder
{
    public function run()
    {
        Certificate::create([
            'title' => 'AICE',
            'issuer' => 'ALX',
            'issue_date' => '2024-11-06',
            'certificate_url' => 'https://drive.google.com/uc?export=view&id=1gotNWyUFCXX5iiq2WZ9izQCi34SUgseq',
        ]);
        Certificate::create([
            'title' => 'Programming Fundamentals',
            'issuer' => 'Udacity',
            'issue_date' => '2024-09-10',
            'certificate_url' => 'https://drive.google.com/uc?export=view&id=17hG4sxHfFzUVgksIKQoVfOvGwonW0vJ_',
        ]);
        Certificate::create([
            'title' => 'Data Analysis Fundamentals',
            'issuer' => 'Udacity',
            'issue_date' => '2024-11-20',
            'certificate_url' => 'https://drive.google.com/uc?export=view&id=10Mgb5KCjWEKW5NAKanp12wpRiAQXKVtt',
        ]);
        Certificate::create([
            'title' => 'React',
            'issuer' => 'Udemy',
            'issue_date' => '2024-11-15',
            'certificate_url' => 'https://drive.google.com/uc?export=view&id=1PqMAflhBq6uj7mDEQAcuArXr0ACAydWn',
        ]);
    }
}
