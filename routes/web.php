<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\NewController;
use App\Http\Controllers\Acontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// 페이지 로딩순서 - 7 - 블레이드 페이지 파일 불러오기 바로 직전

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return "미들웨어 테스트";
})->middleware("test");


Route::get('/one', function () {
    for($i=0; $i<3; $i++) {
        echo "<p>";
        echo app(Acontroller::class)->multiple(2);
        echo "</p>";
        echo "<br/>";
    }
    return "--------------";
});

Route::get('get', [NewController::class, "index"]);

Route::get('get/{id}', function($id) {
    return view('routing', ["id" => $id, "data" => ""]);
});
