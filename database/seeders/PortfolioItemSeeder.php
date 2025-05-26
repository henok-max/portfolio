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
            'image' => 'images/portfolio/sOvnFX881PAcCpX8v0Wc6UdWftKzxDKAZw53qcV7.jpg',

            'github_url' => 'https://github.com/henok-max/online-learning-system',
            'skills' => 'Laravel, PHP, MySQL',
        ]);

        PortfolioItem::create([
            'title' => 'Court Case Tracking System',
            'description' => 'A project built with .NET Framework for Debre Markos High court.',
            'image' => 'images/portfolio/NrYDPwGCiZcYQiI0S143VaBRoAiRoVfW7PQKDaRp.jpg',

            'github_url' => 'NrYDPwGCiZcYQiI0S143VaBRoAiRoVfW7PQKDaRp.jpg',
            'skills' => '.NET, C#, SSMS',
        ]);
    }
}
