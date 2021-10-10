<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.index');
});
Route::get('/nhanvien', function () {
    return view('admin.list.nhanvien');
});
Route::get('/add-nhanvien', function () {
    return view('admin.add.nhanvien');
});
Route::get('/hopdonglaodong', function () {
    return view('admin.list.hopdonglaodong');
});
// Route::get()
