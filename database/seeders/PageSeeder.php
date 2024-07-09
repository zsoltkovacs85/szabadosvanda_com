<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'title' => 'Home',
                'desc' => '',
                'has_text' => 0,
                'has_gallery' => 1,
                'url' => 'home'
            ],
            [
                'title' => 'About',
                'desc' => '',
                'has_text' => 1,
                'has_gallery' => 0,
                'url' => 'about'
            ],
            [
                'title' => 'Data Protection',
                'desc' => '',
                'has_text' => 1,
                'has_gallery' => 0,
                'url' => 'data-protection'
            ],
            [
                'title' => 'Cookie Policy',
                'desc' => '',
                'has_text' => 1,
                'has_gallery' => 0,
                'url' => 'cookie-policy'
            ]
        ];
        foreach ($pages as $page) {
            Page::create([
                'title' => $page['title'],
                'desc' => '',
                'url' => $page['url'],
                'has_text' =>  $page['has_text'],
                'has_gallery' =>  $page['has_gallery']
            ]);
        }
    }
}
