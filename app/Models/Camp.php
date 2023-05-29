<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Camp extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'price',
    ];
}
