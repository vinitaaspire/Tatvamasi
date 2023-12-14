<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'pricing_plan';
    use HasFactory;

    public function scopeActive($query)
    {
        return $query->where('status', 1)->orderBy('order', 'asc');
    }
    
}
