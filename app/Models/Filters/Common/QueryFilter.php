<?php

namespace App\Models\Filters\Common;

use Illuminate\Database\Eloquent\Builder;

abstract class QueryFilter
{
    protected Builder $builder;

    public function apply(Builder $builder, array $params) {
        $this->builder = $builder;

        foreach ($params as $field => $value) {
            $method = $field;
            if (method_exists($this, $method)) {
                call_user_func_array([$this, $method], (array) $value);
            }
        }
    }
}