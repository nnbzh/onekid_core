<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\BaseController;
use App\Models\Gender;
use Illuminate\Http\JsonResponse;

class GenderController extends BaseController
{

    public function list(): JsonResponse
    {
        return $this->successResponse(Gender::query()->get());
    }
}