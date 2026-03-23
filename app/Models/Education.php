<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([ 'institution', 'period', 'degree', 'department'])]
class Education extends Model
{
    protected static function booted(): void
    {
        static::addGlobalScope('latest', function ($query) {
            $query->orderBy('id', 'desc');
        });
    }
}
