<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('index');

// Auth
Route::get('login', 'Auth\LoginController@index')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('register', 'Auth\RegisterController@index')->name('register');
Route::post('register', 'Auth\RegisterController@register');
Route::get('reset', 'Auth\ResetController@index')->name('reset');
Route::post('reset', 'Auth\ResetController@reset');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// User
Route::group(
    [
        'middleware'    => 'user',
        'namespace'     => 'User',
        'prefix'        => 'user',
        'as'            => 'user.'
    ],
    function () {
        Route::get('/', 'HomeController@index')->name('index');

        //Profile
        Route::group(
            [
                'prefix'        => 'profile',
                'as'            => 'profile.',
            ],
            function () {
                Route::get('', 'ProfileController@index')->name('index');
                Route::post('', 'ProfileController@update');
            }
        );
        //Films
        Route::group(
            [
                'prefix'        => 'films',
                'as'            => 'films.',
            ],
            function () {
                Route::get('{id}', 'FilmController@show')->name('show');
            }
        );
        //Reviews
        Route::group(
            [
                'prefix'        => 'reviews',
                'as'            => 'reviews.',
            ],
            function () {
                Route::get('', 'ReviewController@index')->name('index');
                Route::post('{id}', 'ReviewController@store')->name('store');
                Route::get('show/{id}', 'ReviewController@show')->name('show');
                Route::get('edit/{id}', 'ReviewController@edit')->name('edit');
                Route::post('edit/{id}', 'ReviewController@update');
                Route::get('delete/{id}', 'ReviewController@delete')->name('delete');
            }
        );
    }
);

// Admin
Route::group(
    [
        'middleware'    => 'admin',
        'namespace'     => 'Admin',
        'prefix'        => 'admin',
        'as'            => 'admin.'
    ],
    function () {
        Route::get('/', 'HomeController@index')->name('index');

        //Profile
        Route::group(
            [
                'prefix'        => 'profile',
                'as'            => 'profile.',
            ],
            function () {
                Route::get('', 'ProfileController@index')->name('index');
                Route::post('', 'ProfileController@update');
            }
        );
        //Films
        Route::group(
            [
                'prefix'        => 'films',
                'as'            => 'films.',
            ],
            function () {
                Route::get('create', 'FilmController@create')->name('create');
                Route::post('create', 'FilmController@store');
                Route::get('show/{id}', 'FilmController@show')->name('show');
                Route::get('edit/{id}', 'FilmController@edit')->name('edit');
                Route::post('edit/{id}', 'FilmController@update');

                Route::get('delete/{id}', 'FilmController@delete')->name('delete');
            }
        );
        //Reviews
        Route::group(
            [
                'prefix'        => 'reviews',
                'as'            => 'reviews.',
            ],
            function () {
                Route::get('', 'ReviewController@index')->name('index');
                Route::get('all', 'ReviewController@all')->name('all');
                Route::post('{id}', 'ReviewController@store')->name('store');
                Route::get('show/{id}', 'ReviewController@show')->name('show');
                Route::get('edit/{id}/{userId}', 'ReviewController@edit')->name('edit');
                Route::post('edit/{id}/{userId}', 'ReviewController@update');
                Route::get('delete/{id}', 'ReviewController@delete')->name('delete');
            }
        );
    }
);
