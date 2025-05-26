<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PortfolioItem;

class PortfolioItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        PortfolioItem::create([
            'title' => 'DMU E-Learning',
            'description' => 'A project built with Laravel for Debre Markos university.',
            'image' => 'https://drive.google.com/uc?export=view&id=1-VmTZmiviBpI9uo5A4O3_vaKP4JcVffC',

            'github_url' => 'https://github.com/henok-max/online-learning-system',
            'skills' => 'Laravel, PHP, MySQL',
        ]);

        PortfolioItem::create([
            'title' => 'Court Case Tracking System',
            'description' => 'A project built with .NET Framework for Debre Markos High court.',
            'image' => 'https://drive.google.com/uc?export=view&id=1hYUzAAnnYWvN1O7b4Qe3nI1XnnkvAsiZ',

            'github_url' => 'https://github.com/henok-max/COURTCASETRACKINGSYSTEM',
            'skills' => '.NET, C#, SSMS',
        ]);
    }
}
