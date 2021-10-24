<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\BaseController;

class UserController extends BaseController
{
    public function user()
    {
        return $this->successResponse(["user" => request()->user()->load('profile')]);
    }
}