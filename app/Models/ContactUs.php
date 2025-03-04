<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory; protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'interested_in',
        'how_did_you_hear',
        'email',
        'telephone',
        'message',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
