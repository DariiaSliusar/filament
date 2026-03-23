<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $experiences = [
            [
                'id' => 1,
                'company' => 'Self Employed',
                'period' => '25.06.2023 — 16.01.2025',
                'position' => 'Laravel Developer',
            ],
            [
                'id' => 2,
                'company' => 'DOIT',
                'period' => '16.01.2025 — 4.06.2025',
                'position' => 'Laravel Developer',
            ],
            [
                'id' => 3,
                'company' => 'Self Employed',
                'period' => '05.06.2025 — Present',
                'position' => 'Laravel Developer',
            ],
        ];

        foreach ($experiences as $experience) {
            Experience::query()->create($experience);
        }
    }
}
