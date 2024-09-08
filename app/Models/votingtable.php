<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class votingtable extends Model
{
    use HasFactory;
    // use Notifiable;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'phone_number',
        'citizenship_number',
        'voter_id',
        'dob',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}