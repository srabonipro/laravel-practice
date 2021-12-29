<?php

namespace App\Models;

use App\Casts\FullNameCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'firstname', 'lastname'];

    protected $casts = [
        'fullname' => FullNameCast::class
    ];
}
