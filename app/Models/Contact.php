<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'contact_banner',
        'side_image',
        'contact_heading',
        'phone',
        'fax',
        'address',
        'office_hours_open',
        'office_hours_closed',
    ];
}
