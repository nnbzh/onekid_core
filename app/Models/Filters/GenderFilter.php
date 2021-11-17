<?php

namespace App\Models\Filters;

use App\Models\Filters\Common\QueryFilter;

class GenderFilter extends QueryFilter
{
    public function name($value) {
        $this->builder->where('name', $value);
    }
}