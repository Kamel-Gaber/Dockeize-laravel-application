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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    $students = ['kamel', 'amr', 'farouk', 'mahmoud','John', 'Jane', 'Bob', 'Alice', 'Tom', 'jeery'];
    return view('students', ['students' => $students]);
});
