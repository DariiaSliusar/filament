<?php

namespace App\Enums;

enum SkillCategoryEnum: string
{
    case BACKEND = 'backend';
    case FRONTEND = 'frontend';
    case DATABASE = 'database';
    case TOOLS = 'tools';

    public function getLabel(): string
    {
        return match ($this) {
            self::BACKEND => 'Backend',
            self::FRONTEND => 'Frontend',
            self::DATABASE => 'Database',
            self::TOOLS => 'Tools',
        };
    }
}
