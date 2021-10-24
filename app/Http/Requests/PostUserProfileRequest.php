<?php

namespace App\Http\Requests;

use Pearl\RequestValidate\RequestAbstract;

class PostUserProfileRequest extends RequestAbstract
{
    public function rules() {
        return [
            "user.first_name"   => "required|string",
            "user.last_name"  => "nullable|string",
            "user.email"        => "required|email",
            "profile.gender_id" => "required|exists:genders,id",
            "profile.birth_date"=> "required|date",
        ];
    }
}