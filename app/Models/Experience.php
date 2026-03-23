<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['company', 'period', 'position'])]
class Experience extends Model
{
    protected static function booted(): void
    {
        static::addGlobalScope('latest', function ($query) {
            $query->orderBy('id', 'desc');
        });
    }
}
