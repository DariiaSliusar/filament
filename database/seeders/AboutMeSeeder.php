<?php

namespace Database\Seeders;

use App\Models\AboutMe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutMeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutMe::query()->insert([
            'name' => 'Dariia Sliusar',
            'home_image' => 'images/photo-home.jpg',
            'banner_image' => 'images/photo-banner.jpg',
            'phone' => '+48508744705',
            'email' => 'dariiasliusar@gmail.com',
            'address' => 'Łódź, Poland',
            'description' => 'An experienced Laravel developer specializing in creating reliable and scalable web applications using modern approaches and framework capabilities. I am constantly improving my skills to ensure clean, maintainable code and high-quality projects.',
            'summary' => 'Experienced web developer with a passion for creating dynamic applications using Laravel on the backend and a variety of modern frontend technologies tailored to each project’s needs.',
            'tagline' => 'Laravel Developer',
            'cv' => 'DariiaSliusar.pdf',
        ]);
    }
}
