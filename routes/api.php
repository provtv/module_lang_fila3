<?php

declare(strict_types=1);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)

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
Route::middleware('auth:api')->get('/xot', function (Request $request) {
    return $request->user();
});
*/
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
Route::middleware('auth:api')->get('/job', fn(Request $request) => $request->user());
*/
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
