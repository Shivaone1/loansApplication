<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::group(["namespace"=>"Admin","prefix"=>"admin","middleware"=>["auth:sanctum"]], function(){
//     Route::get('api-aadharverify',[App\Http\Controllers\api\aadharauthcontroller::class,'aadharverify']);
// });
Route::post('aadharverify',[App\Http\Controllers\api\aadharauthcontroller::class,'aadharverify']);
Route::get('aadharverifyview',[App\Http\Controllers\api\aadharauthcontroller::class,'aadharverifyview']);
