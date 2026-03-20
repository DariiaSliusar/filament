<?php

namespace App\Models;

use App\Enums\SkillCategoryEnum;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Casts;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'category'])]
#[Casts(['category' => SkillCategoryEnum::class])]
class Skill extends Model
{

}
