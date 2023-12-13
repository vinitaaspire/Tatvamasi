<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use HasFactory , SoftDeletes;


    protected $fillable = [
        'title',
        'image',
        'link',
        'status',
        'order',
        // Add other fields as needed
    ];
    

    public function scopeActive($query)
    {
        return $query->where('status', 1)->orderBy('order', 'asc');
    }
    
}
