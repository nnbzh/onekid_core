<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    use HasFactory;

    protected $table = 'centres';
    protected $fillable = ['name', 'business_id'];
    protected $hidden = ['created_at', 'updated_at'];
}