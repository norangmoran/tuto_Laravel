<?php

use Illuminate\Support\Facades\Route;

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
