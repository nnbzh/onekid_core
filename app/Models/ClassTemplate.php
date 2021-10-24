<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassTemplate extends Model
{
    use HasFactory;

    protected $table = 'class_templates';
    protected $fillable = ['name', 'description', 'center_id', 'category_id'];
    public $timestamps = true;
    protected $hidden = ['created_at', 'updated_at'];

    public function centre() {
        return $this->belongsTo(Centre::class, 'center_id', 'id');
    }
}