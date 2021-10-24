<?php

namespace App\Http\Requests;

use Pearl\RequestValidate\RequestAbstract;

class PostChildRequest extends RequestAbstract
{
    public function rules() {
        return [
            "user.first_name"   => "required|string",
            "user.username"     => "required|string|unique:users,username",
            "user.password"     => "required"
        ];
    }
}