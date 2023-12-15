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
    $data = [
        'name' => 'Erica',
        'surname' => 'Ostini',
        'age' => '23',
        'gender' => 'F',
    ];
    return view('home', $data);
})->name('home');
Route::get('/info', function () {
    $data = [
        'name' => 'Erica',
        'surname' => 'Ostini',
        'birthday' => '14/06/2000',
        'school' => 'Diploma ITC',
        'university' => 'Laurea in Economia e Managment',
    ];
    return view('pages.info', $data);
})->name('info');