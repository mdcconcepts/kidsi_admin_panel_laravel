<?php

/**
 * Authenticated group
 */
Route::group(array('before' => 'auth'), function() {
    /**
     * Sign Out(get)
     */
    Route::get('/account/sign-out', array(
        'as' => 'account-sign-out',
        'uses' => 'AccountController@getSignOut'
    ));
});


/**
 * This is Home Controller
 */
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@home'));



/**
 * This is Check Server Connection 
 */
Route::get('/mobile/check-server/{Server_Name}', array('as' => 'check-server', 'uses' => 'AndroidServiceController@checkServerConnection'));


/**
 * This is Check Server Connection 
 */
Route::get('/mobile/techer_auth/{username}/{password}', array('as' => 'check-server', 'uses' => 'AndroidServiceController@checkTeachAuth'));

/**
 * This is blank Page
 */
Route::get('/blank', function() {
    return View::make('pages.blank');
});


/**
 * Unauthenticated group
 */
Route::group(array('before' => 'guest'), function() {
    /**
     * CSRF request
     */
    Route::group(array('before' => 'csrf'), function() {
        /**
         * Create Account (POST)
         */
        Route::post('/account/create', array(
            'as' => 'account-create',
            'uses' => 'AccountController@postCreate'
        ));
    });
    /**
     * Sign In Account (GET)
     */
    Route::get('/account/sign-in', array(
        'as' => 'account-sign-in',
        'uses' => 'AccountController@getSignIn'
    ));
    /**
     * Sign In Account (POST)
     */
    Route::post('/account/sign-in', array(
        'as' => 'account-sing-in-post',
        'uses' => 'AccountController@postSignIn'
    ));
    /**
     * Forgot Password (GET)
     */
    Route::get('/account/forgot-password', array(
        'as' => 'account-forgot-password',
        'uses' => 'AccountController@getForgotPassword'
    ));
    /**
     * Forgot Password (POST)
     */
    Route::post('/account/forgot-password', array(
        'as' => 'account-forgot-password-post',
        'uses' => 'AccountController@postForgotPassword'
    ));
    /**
     * Create Account (GET)
     */
    Route::get('/account/create', array(
        'as' => 'account-create',
        'uses' => 'AccountController@getCreate'
    ));
    /**
     * Reset Password (get)
     */
    Route::get('/account/reset-password/{code}', array(
        'as' => 'reset-password',
        'uses' => 'AccountController@getResetPassword'
    ));
    /**
     * Reset Password (POST)
     */
    Route::post('/account/reset-password', array(
        'as' => 'reset-password-post',
        'uses' => 'AccountController@postResetPassword'
    ));
});
