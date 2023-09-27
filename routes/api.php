<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(["middleware" => "jwt"], function () {
//     Route::get("/blog", [className::class, "index"]);
// });

Route::group(["prefix" => "blog"], function () {
    // http://localhost:8000/api/blog
    Route::get("/", [BlogController::class, 'index'] ); // get all list

    // http://localhost:8000/api/blog
    Route::post("/", [BlogController::class, 'store'] ); // get all Create

    // http://localhost:8000/api/blog/1
    Route::get("/{id}", [BlogController::class, 'show'] ); // get all list show

    // http://localhost:8000/api/blog/1
    Route::put("/{id}", [BlogController::class, 'update'] ); // get all list update

    // http://localhost:8000/api/blog/1
    Route::delete("/{id}", [BlogController::class, 'destroy'] ); // get all list
});

