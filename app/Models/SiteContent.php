<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'phone',
        'why-choose-us-heading',
        'why-choose-us-description',
        'why-choose-us-image',
        'footer-content',
        'footer-address',
        'footer-copyright',
    ];
    
}
