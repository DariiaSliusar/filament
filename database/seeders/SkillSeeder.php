<?php

namespace Database\Seeders;

use App\Enums\SkillCategoryEnum;
use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            // Backend
            ['name' => 'PHP', 'category' => SkillCategoryEnum::BACKEND->value],
            ['name' => 'Laravel Framework', 'category' => SkillCategoryEnum::BACKEND->value],

            // Frontend
            ['name' => 'JavaScript', 'category' => SkillCategoryEnum::FRONTEND->value],
            ['name' => 'Vue.js', 'category' => SkillCategoryEnum::FRONTEND->value],
            ['name' => 'HTML', 'category' => SkillCategoryEnum::FRONTEND->value],
            ['name' => 'CSS', 'category' => SkillCategoryEnum::FRONTEND->value],
            ['name' => 'Tailwind CSS', 'category' => SkillCategoryEnum::FRONTEND->value],
            ['name' => 'Bootstrap', 'category' => SkillCategoryEnum::FRONTEND->value],

            // Database
            ['name' => 'MySQL / SQLite', 'category' => SkillCategoryEnum::DATABASE->value],
            ['name' => 'Redis (Caching, Queues)', 'category' => SkillCategoryEnum::DATABASE->value],

            // Tools
            ['name' => 'Git', 'category' => SkillCategoryEnum::TOOLS->value],
            ['name' => 'GitHub', 'category' => SkillCategoryEnum::TOOLS->value],
            ['name' => 'Docker', 'category' => SkillCategoryEnum::TOOLS->value],
            ['name' => 'VS Code', 'category' => SkillCategoryEnum::TOOLS->value],
            ['name' => 'PhpStorm', 'category' => SkillCategoryEnum::TOOLS->value],
            ['name' => 'Postman', 'category' => SkillCategoryEnum::TOOLS->value],
            ['name' => 'Linux', 'category' => SkillCategoryEnum::TOOLS->value],
        ];

        foreach ($skills as $skill) {
            Skill::query()->create($skill);
        }
    }
}
