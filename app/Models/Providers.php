<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{
    use HasFactory;
    protected $table = 'vs_providers';

    // public function products()
    // {
    //     return $this->hasMany(Products::class,'category_id');
    // }

    protected $fillable = [
        'name',
        'description',
    ];
}
