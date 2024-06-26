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
//HOME_PAGE_ROUTE
Route::get('/', function () {
    return view('welcome');
});
 //COURSES_ROUTES
 Route::get('/courses', function () {
    return view('courses.index');
})->name('courses.index');
Route::get('/{course}/course', function () {
    return view('courses.course');
})->name('courses.course');
//USERS_ROUTES
Route::get('/user', function () {
    return view('users.index');
})->name('user.index');
Route::post('/login', function () {
    return view('users.login');
})->name('login');
