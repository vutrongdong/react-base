<?php

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
// use Symfony\Component\Routing\Route;
Route::group(['middleware' => 'web', 'prefix' => '/'], function()
{
    // redirect if has login
    Route::group(['middleware' => 'guest:web,web.index'], function() {
        Route::get('/login', 'Auth\LoginController@showLoginForm')->name('web.login');
        Route::post('/login', 'Auth\LoginController@login')->name('web.post-login');
    });
    
    // Route::group(['middleware' => 'auth'], function() {
        // Route::get('/', 'WebController@index')->name('web.index');
        Route::get('/logout', 'Auth\LoginController@logout')->name('web.logout');
    // });
    Route::get('/{path?}', [
        'uses' => 'WebController@index',
        'where' => ['path' => '.*']
    ])->name('web.index');
});
