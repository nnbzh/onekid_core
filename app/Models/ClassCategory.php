<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassCategory extends Model
{
    protected $table = 'class_categories';
    public $timestamps = true;
    protected $fillable = ['name', 'slug'];
    protected $hidden = ['created_at', 'updated_at'];

    public function classTemplates(): HasMany
    {
        return $this->hasMany(ClassTemplate::class, 'category_id', 'id');
    }
}