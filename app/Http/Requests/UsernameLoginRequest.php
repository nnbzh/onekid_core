<?php

namespace App\Http\Requests;

use Pearl\RequestValidate\RequestAbstract;

class UsernameLoginRequest extends RequestAbstract
{
    public function rules() {
        return [
            'username' => 'required',
            'password' => 'required'
        ];
    }
}