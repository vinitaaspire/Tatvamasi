<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyUs extends Model
{

    protected $table = "why_choose";
    
    use HasFactory;

    public function scopeActive($query)
    {
        return $query->where('status', 1)->orderBy('order', 'asc');
    }
    
}
