<?php

namespace App\Http\Controllers\Api\v1;

use App\Exceptions\InvalidCodeException;
use App\Helpers\PhoneNumberFormatter;
use App\Helpers\RandomCodeGenerator;
use App\Helpers\RedisCache;
use App\Helpers\TokenHandler;
use App\Http\Controllers\BaseController;
use App\Http\Requests\PhoneVerificationRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UsernameLoginRequest;
use App\Models\User;
use App\Traits\ApiResponse;
use App\Traits\IssuesToken;
use Illuminate\Http\JsonResponse;

class AuthController extends BaseController
{
    use IssuesToken, ApiResponse;

    const  PHONE_CODE_REDIS_KEY = 'phone_number/code/';

    private RedisCache $redis;

    public function __construct(RedisCache $redis)
    {
        $this->redis = $redis;
    }

    /**
     * @param RegisterRequest $request
     * @return JsonResponse
     */
    public function loginByPhone(RegisterRequest $request): JsonResponse
    {
        $phoneNumber = PhoneNumberFormatter::clear($request->get('phone_number'));
        $user = User::query()->firstOrCreate(['phone_number' => $phoneNumber]);
        $code = intval($phoneNumber) % 10000;

        $this->redis->set(self::PHONE_CODE_REDIS_KEY.$phoneNumber, [
            "code"      => $code,
            "user_id"   => $user->id
        ]);

        return $this->successResponse($user, null, 201);
    }

    public function verify(PhoneVerificationRequest $request): JsonResponse
    {
        $tokens = TokenHandler::handle($this->issueToken($request));

        return $this->successResponse([
            "auth" => $tokens,
            "user" => $request->user()
        ]);
    }

    public function loginByUsername(UsernameLoginRequest $request): JsonResponse
    {
        $tokens = TokenHandler::handle($this->issueToken($request, 'password'));

        return $this->successResponse([
            "auth" => $tokens,
            "user" => $request->user()
        ]);
    }
}