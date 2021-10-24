<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\BaseController;
use App\Http\Requests\PostChildRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ChildController extends BaseController
{
    public function create(PostChildRequest $request) {
        $data = $request->get('user');
        $child              = new User($data);
        $child->password    = Hash::make($data['password']);
        $child->parent_id   = request()->user()->id;
        $child->is_verified = true;
        $child->saveOrFail();

        return $child->refresh();
    }
}