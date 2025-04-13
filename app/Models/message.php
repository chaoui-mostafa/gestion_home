<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // Define fillable properties if necessary
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'subject',
    ];
}
