<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    public function images() : hasMany
    {
        return $this->hasMany(Image::class);
    }
}
