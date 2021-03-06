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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


// Student
Route::prefix('students')->group(function () {

    Route::get('/', [
        'as' => 'students.index',
        'uses' => 'App\Http\Controllers\StudentController@index'
    ]);

    Route::get('/create', [
        'as' => 'students.create',
        'uses' => 'App\Http\Controllers\StudentController@create'
    ]);

    Route::post('/store', [
        'as' => 'students.store',
        'uses' => 'App\Http\Controllers\StudentController@store'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'students.edit',
        'uses' => 'App\Http\Controllers\StudentController@edit'
    ]);

    Route::post('/update/{id}', [
        'as' => 'students.update',
        'uses' => 'App\Http\Controllers\StudentController@update'
    ]);

    Route::get('/delete/{id}', [
        'as' => 'students.delete',
        'uses' => 'App\Http\Controllers\StudentController@delete'
    ]);
});

// Member
Route::prefix('members')->group(function () {

    Route::get('/', [
        'as' => 'members.index',
        'uses' => 'App\Http\Controllers\MemberController@index'
    ]);

    Route::get('/create', [
        'as' => 'members.create',
        'uses' => 'App\Http\Controllers\MemberController@create'
    ]);

    Route::post('/store', [
        'as' => 'members.store',
        'uses' => 'App\Http\Controllers\MemberController@store'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'members.edit',
        'uses' => 'App\Http\Controllers\MemberController@edit'
    ]);

    Route::post('/update/{id}', [
        'as' => 'members.update',
        'uses' => 'App\Http\Controllers\MemberController@update'
    ]);

    Route::get('/delete/{id}', [
        'as' => 'members.delete',
        'uses' => 'App\Http\Controllers\MemberController@delete'
    ]);
});

// BorrowController
Route::prefix('borrows')->group(function () {

    Route::get('/', [
        'as' => 'borrows.index',
        'uses' => 'App\Http\Controllers\BorrowController@index'
    ]);

    Route::get('/create', [
        'as' => 'borrows.create',
        'uses' => 'App\Http\Controllers\BorrowController@create'
    ]);

    Route::post('/store', [
        'as' => 'borrows.store',
        'uses' => 'App\Http\Controllers\BorrowController@store'
    ]);
//
//    Route::get('/edit/{id}', [
//        'as' => 'members.edit',
//        'uses' => 'App\Http\Controllers\MemberController@edit'
//    ]);
//
//    Route::post('/update/{id}', [
//        'as' => 'members.update',
//        'uses' => 'App\Http\Controllers\MemberController@update'
//    ]);
//
//    Route::get('/delete/{id}', [
//        'as' => 'members.delete',
//        'uses' => 'App\Http\Controllers\MemberController@delete'
//    ]);
});





//---------------------------------SHOP----------------------


//Route::prefix('categories')->group(function () {
//
//    Route::get('/', [
//        'as' => 'categories.index',
//        'uses' => 'App\Http\Controllers\CategoryController@index'
//    ]);
//
//    Route::get('/create', [
//        'as' => 'categories.create',
//        'uses' => 'App\Http\Controllers\CategoryController@create'
//    ]);
//
//    Route::post('/store', [
//        'as' => 'categories.store',
//        'uses' => 'App\Http\Controllers\CategoryController@store'
//    ]);
//
//    Route::get('/edit/{id}', [
//        'as' => 'categories.edit',
//        'uses' => 'App\Http\Controllers\CategoryController@edit'
//    ]);
//
//    Route::post('/update/{id}', [
//        'as' => 'categories.update',
//        'uses' => 'App\Http\Controllers\CategoryController@update'
//    ]);
//
//    Route::get('/delete/{id}', [
//        'as' => 'categories.delete',
//        'uses' => 'App\Http\Controllers\CategoryController@delete'
//    ]);
//});


//Route::prefix('menus')->group(function () {
//
//    Route::get('/', [
//        'as' => 'menus.index',
//        'uses' => 'App\Http\Controllers\MenuController@index'
//    ]);
//
//    Route::get('/create', [
//        'as' => 'menus.create',
//        'uses' => 'App\Http\Controllers\MenuController@create'
//    ]);
//
//    Route::post('/store', [
//        'as' => 'menus.store',
//        'uses' => 'App\Http\Controllers\MenuController@store'
//    ]);
//});
