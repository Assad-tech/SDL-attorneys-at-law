<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'greetings',
        'slider_image',
        'slider_title',
        'slider_description',
        'status',
    ];
}
