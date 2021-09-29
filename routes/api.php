<?php

use App\Http\Controllers\CarouselController;
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

Route::get('/carousels', [CarouselController::class, 'index']);
// Route::post('/carousels', [CarouselController::class, 'store']);

// Route::get('/carousel', function () {
//     return carousel::all();
// });

// Route::post('/carousel', function () {
//     return carousel::create([
//         'title' => 'Test Title',
//         'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque deserunt voluptatum accusamus temporibus aspernatur vel eveniet nesciunt obcaecati recusandae odio! Nam earum quod, excepturi voluptatibus ea accusamus totam ab eveniet!',
//         'url' => 'https://google.com',
//         'image' => '/storage/example.png',
//     ]);
// });

// Route::middleware('auth:sanctum')->apiResource('/carousels', [CarouselController::class]);
