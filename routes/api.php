<?php

declare(strict_types=1);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
=======

use Illuminate\Support\Facades\Route;

// use Modules\User\Http\Controllers\Api\UserController;
>>>>>>> 0bcedf94 (Squashed 'laravel/Modules/User/' content from commit 947e4724)

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
<<<<<<< HEAD
<<<<<<< HEAD
Route::middleware('auth:api')->get('/xot', function (Request $request) {
    return $request->user();
});
*/
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
Route::middleware('auth:api')->get('/job', fn(Request $request) => $request->user());
*/
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
=======
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::prefix('/user')
    ->namespace('Api')
    ->group(
        static function (): void {
            // authenticate user
            /*
            Route::post('/login', [UserController::class, 'login'])
                ->name('api.login');
            */
            Route::post('/login', 'LoginController')
                ->name('api.login');
            /*
            Route::get('/login', [UserController::class, 'loginTest'])
                ->name('api.loginTest');
            */
            /*
            Route::get('/logout', 'LogoutController')
                ->name('api.logout');
            */
            // get user credentials
            /*
            Route::middleware('auth:api')
                ->get('/current', [UserController::class, 'getCurrentUser'])
                ->name('api.currentUser');
            */
        }
    );

/*
Route::middleware('auth:api' , 'scope:view-user' )
    ->get('/v2/user', function (Request $request) {
        return $request->user();
});
*/
Route::middleware('auth:api')
    ->namespace('Api')
    ->get('/v2/user', 'Api\GetLoggedUserController');

Route::middleware('auth:api')
    ->namespace('Api')
    ->get('/v2/logout', 'Api\LogoutController');

/*
Route::middleware('auth:api')
    ->namespace('Api')
    ->get('/v2/logout', function (Request $request) {
    // $user = $request->user();
    Assert::notNull($user = $request->user(),'['.__LINE__.']['.class_basename($this).']');
    $accessToken = $user->token();
    DB::table('oauth_refresh_tokens')
    ->where('access_token_id', $accessToken->)
    ->delete();
    $user->token()->delete();

    return response()->json([
        'message' => 'Successfully logged out',
        'session' => session()->all(),
    ]);
});
*/
>>>>>>> 0bcedf94 (Squashed 'laravel/Modules/User/' content from commit 947e4724)
