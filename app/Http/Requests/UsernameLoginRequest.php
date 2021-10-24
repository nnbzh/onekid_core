<?php

namespace App\Http\Requests;

use Pearl\RequestValidate\RequestAbstract;

class UsernameLoginRequest extends RequestAbstract
{
    /**
     * @OA\Post (
     *     path="/api/v1/login",
     *     summary = "Login with username(child)",
     *     operationId="auth.login_by_username",
     *     tags={"Auth"},
     *       @OA\RequestBody(
     *       required=true,
     *       @OA\MediaType(
     *         mediaType="application/json",
     *         @OA\Schema(
     *           @OA\Property(
     *             property="phone_number",
     *             description="Phone number (+7(777)4563077)",
     *             type="string",
     *           ),
     *         ),
     *       ),
     *     ),
     *     @OA\Response(
     *         response="201",
     *         description="New User",
     *     )
     * )
     *
     */
    public function rules() {
        return [
            'username' => 'required',
            'password' => 'required'
        ];
    }
}