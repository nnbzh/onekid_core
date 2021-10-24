<?php

namespace App\Http\Requests;

use Pearl\RequestValidate\RequestAbstract;

class PhoneVerificationRequest extends RequestAbstract
{
    /**
     * @OA\Post (
     *     path="/api/v1/verify",
     *     summary = "Verify code sent by sms(last 4 digits of number)",
     *     operationId="auth.verify",
     *     tags={"Auth"},
     *       @OA\RequestBody(
     *       required=true,
     *       @OA\MediaType(
     *         mediaType="application/json",
     *         @OA\Schema(
     *           @OA\Property(
     *             property="code",
     *             description="Code",
     *             type="integer",
     *           ),
     *           @OA\Property(
     *             property="phone_number",
     *             description="Phone number",
     *             type="integer",
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
            "phone_number"  => "required|regex:/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/",
            "code"          => "required|int"
        ];
    }
}