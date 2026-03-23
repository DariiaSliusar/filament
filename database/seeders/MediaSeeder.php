<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $medias = [
            [
                'link' => 'https://www.linkedin.com/in/dariia-sliusar-640b6b329/',
                'icon' => 'fa-brands fa-linkedin-in',
            ],
            [
                'link' => 'https://github.com/DariiaSliusar',
                'icon' => 'fa-brands fa-github',
            ],
        ];

        foreach ($medias as $media) {
            Media::query()->create($media);
        }
    }
}
