<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\PortfolioItem::create([
            'title' => 'My Existing Project',
            'description' => 'A project built with Laravel for portfolio management.',
            'github_url' => 'https://github.com/yourusername/existing-project',
            'skills' => 'Laravel, PHP, MySQL',
        ]);
    }
}
