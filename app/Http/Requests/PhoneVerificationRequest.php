<?php

namespace App\Http\Requests;

use Pearl\RequestValidate\RequestAbstract;

class PhoneVerificationRequest extends RequestAbstract
{
    public function rules() {
        return [
            "phone_number"  => "required|regex:/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/",
            "code"          => "required|int"
        ];
    }
}