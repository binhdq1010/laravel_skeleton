<?php

Route::group(['prefix' => 'backend', 'middleware' => ['web', 'auth:backend']], function () {
    Route::get('/dashboard', 'DashBoardController@index');
});

Route::group(['prefix' => 'backend', 'middleware' => ['web']], function () {
    // Authentication Routes...
    $this->get('login', 'AuthController@showLoginForm');
    $this->post('login', 'AuthController@login');
    $this->get('logout', 'AuthController@logout');

    // Registration Routes...
    $this->get('register', 'AuthController@showRegistrationForm');
    $this->post('register', 'AuthController@register');
});
