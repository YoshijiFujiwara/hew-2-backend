<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Http\Resources\MeResource;
use App\Http\Resources\UserResource;
use App\User;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRegisterRequest as AdminUserRegister;
use Pusher\Laravel\Facades\Pusher;

/**
 * @group auth 認証
 */
class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register', 'adminRegister', 'adminLogin']]);
    }

    /**
     * email, password でログインし、JWTを得る
     *
     * @bodyParam email string required メールアドレス
     * @bodyParam password string required パスワード
     *
     * @responseFile 200 responses/auth.login.200.json
     * @responseFile 401 responses/auth.login.401.json
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
     * email, password でログインし、JWTを得る
     *
     * @bodyParam email string required メールアドレス
     * @bodyParam password string required パスワード
     *
     * @responseFile 200 responses/auth.login.200.json
     * @responseFile 401 responses/auth.login.401.json
     */
    public function adminLogin()
    {
        if (! request('email') == 'testuser@example.com') {
            return abort(401);
        }

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
     * @bodyParam username string required ユーザーネーム（表示される名前）
     * @bodyParam password string required パスワード
     *
     * @responseFile 200 responses/auth.register.200.json
     * @responseFile 422 responses/auth.register.422.json
     */
    public function register(UserRegisterRequest $request)
    {
        $user = User::create($request->only(['email', 'password', 'username']));

        if (! $token = auth()->attempt($request->only(['email', 'password']))) {
            return abort(401);
        }

        // リアルタイム通知
        Pusher::trigger(self::ADMIN_CHANNEL, self::USER_CREATE_EVENT, [
            'message' => new UserResource(User::where('email', $request->email)->first())
        ]);

        return $this->respondWithToken($token);
    }

    public function adminRegister(AdminUserRegister $request)
    {
        $user = User::create($request->only(['email', 'password', 'name']));

        if (! $token = auth()->attempt($request->only(['email', 'password']))) {
            return abort(401);
        }

        // リアルタイム通知
        Pusher::trigger(self::ADMIN_CHANNEL, self::USER_CREATE_EVENT, [
            'message' => ''
        ]);

        return $this->respondWithToken($token);
    }

    /**
     * me 現在ログインしているユーザーの情報を得る
     *
     * @responseFile 200 responses/auth.me.200.json
     */
    public function me()
    {
        $userId = auth()->user()->id;
        return new MeResource(User::find($userId));
    }

    /**
     * logout ログアウト
     *
     * @responseFile 200 responses/auth.logout.200.json
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * refresh token トークンのリフレッシュ
     *
     * @responseFile 200 responses/auth.refresh.200.json
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
