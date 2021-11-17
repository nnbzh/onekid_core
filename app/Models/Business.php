<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Business extends TimestampedModel
{
    use HasFactory;

    protected $table = 'businesses';

    protected $fillable = [
        'name'
    ];
}