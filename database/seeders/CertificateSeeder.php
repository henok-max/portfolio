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
            'title' => 'AWS Certified Cloud Practitioner',
            'issuer' => 'Amazon Web Services',
            'issue_date' => '2023-01-15',
            'certificate_url' => 'certificates/aws-cert.pdf',
        ]);
    }
}
