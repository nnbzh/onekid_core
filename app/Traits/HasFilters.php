<?php

namespace App\Traits;

use App\Models\Filters\Common\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

trait HasFilters
{
    public function scopeApplyFilters(Builder $builder, QueryFilter $filter, array $fields) {
        $filter->apply($builder, $fields);
    }
}