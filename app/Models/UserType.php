<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'user_types';
    protected $fillable = ['slug', 'name'];
    public $timestamps = true;
    protected $hidden = ['created_at', 'updated_at'];
}