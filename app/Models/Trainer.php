<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->hasMany(Courses::class);
    }
    public function scopeActive($query)
    {
        return $query->where('status', 1)->orderBy('order', 'asc');
    }


}
