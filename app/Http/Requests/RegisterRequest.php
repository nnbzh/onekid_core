<?php

namespace App\Http\Requests;

use Pearl\RequestValidate\RequestAbstract;

class RegisterRequest extends RequestAbstract
{
    /**
     * @OA\Post (
     *     path="/api/v1/register",
     *     summary = "Register user and login by sms",
     *     operationId="auth.register",
     *     tags={"Auth"},
     *     security={ {"bearer": {} }},
    *       @OA\RequestBody(
     *       required=true,
     *       @OA\MediaType(
     *         mediaType="application/json",
     *         @OA\Schema(
     *           @OA\Property(
     *             property="phone_number",
     *             description="Phone number",
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
            "phone_number" => "required|regex:/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/"
        ];
    }
}