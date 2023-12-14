<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Courses extends Model
{
    use HasFactory , SoftDeletes;

    public function category()
    {
        return $this->belongsTo(CourseCategory::class, 'category_id');
    }

    public function trainer()
    {
        return $this->belongsTo(Trainer::class, 'trainer_id');
    }


    public function scopeActive($query)
    {
        return $query->where('status', 1)->orderBy('order', 'asc');
    }

}
