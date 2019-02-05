<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    /**
     * email, password でログインし、JWTを得る
     *
     * @bodyParam email string required メールアドレス
     * @bodyParam password string required パスワード
     *
     * @response 401 {
    "error": "Unauthorized"
    }
     *
     * @response {
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvbG9naW4iLCJpYXQiOjE1NDc2MDE0MzAsImV4cCI6MTU0NzYwNTAzMCwibmJmIjoxNTQ3NjAxNDMwLCJqdGkiOiJpYVR5Tld6NEFJRmpzZmhMIiwic3ViIjoxLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.3NMSXPcEPngdi_xQlNUp30-C7mPJSNUub24BaLj-0sc",
    "token_type": "bearer",
    "expires_in": 3600
    }
     *
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * email, password, usernameでユーザー登録し、JWTを得る
     *
     * @bodyParam email string required メールアドレス
     * @bodyParam name string required 名前
     * @bodyParam username string required ユーザーネーム（表示される名前）
     * @bodyParam password string required パスワード
     *
     * @response 401 {
    "message": "Unauthenticated."
    }
     *
     * @response 422 {
    "message": "The given data was invalid.",
    "errors": {
    "email": [
    "The email has already been taken."
    ]
    }
    }
     *
     * @respnose {
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaVwvYXV0aFwvcmVnaXN0ZXIiLCJpYXQiOjE1NDc2MDIzMDEsImV4cCI6MTU0NzYwNTkwMSwibmJmIjoxNTQ3NjAyMzAxLCJqdGkiOiI5QmpQNXlqanRDdEtaaG96Iiwic3ViIjo1MiwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.wdRof4C_u5ePANfsS6y3Q1nBrsmuNMt_9fXWFwu02Rg",
    "token_type": "bearer",
    "expires_in": 3600
    }
     */
    public function register(UserRegisterRequest $request)
    {
        $user = User::create($request->only(['email', 'password', 'name', 'username']));

        if (! $token = auth()->attempt($request->only(['email', 'password']))) {
            return abort(401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * me 現在ログインしているユーザーの情報を得る
     *
     * @respose {
    "id": 52,
    "name": "aaasaaaaaa",
    "username": "aaaasaaaa",
    "email": "hogehsoges@hoge.com",
    "email_verified_at": null,
    "created_at": "2019-01-16 01:31:41",
    "updated_at": "2019-01-16 01:31:41"
    }
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * logout ログアウト
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * refresh token トークンのリフレッシュ
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
