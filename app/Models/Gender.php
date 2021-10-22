<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = "genders";
    protected $fillable = ['slug', 'name'];
    public $timestamps = true;
    protected $hidden = ['updated_at', 'created_at'];

}