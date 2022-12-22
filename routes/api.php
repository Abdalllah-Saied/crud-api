<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\CategoryController;

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
//Route::apiResource('users',UserController::class);
Route::prefix('users')
    ->name('users.')
    ->group(function (){
       Route::get('/',[UserController::class,'index'])->name('index');
       Route::post('/',[UserController::class,'store'])->name('store');
       Route::get('/{user}',[UserController::class,'show'])->name('show');
       Route::put('/{user}',[UserController::class,'update'])->name('update');
       Route::delete('/{user}',[UserController::class,'destroy'])->name('destroy');
    });
Route::get("category/{id?}",[CategoryController::class,'getCategory']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
