<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportingStaff extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'staff_fullname',
        'staff_education',
        'staff_professional_aff',
        'staff_bio',
        'status',
        'staff_image',
        'staff_banner',
        'staff_fb',
        'staff_insta',
        'staff_yelp',
    ];
}
