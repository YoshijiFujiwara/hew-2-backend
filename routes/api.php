<?php

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {

    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

Route::middleware('JWT')->group(function () {
    Route::apiResource('friends', 'FriendController')->only(['index', 'store']);
    Route::get('friends/blocked', 'FriendController@blockedUsers');
    Route::get('friends/waiting', 'FriendController@waitingFriends');
    Route::get('friends/requested', 'FriendController@friendRequestUsers');
    Route::post('friends/permit', 'FriendController@permit');
    Route::post('friends/reject', 'FriendController@reject');
    Route::apiResource('friends', 'FriendController')->only(['show', 'destroy'])->middleware('can:has,friend');

    Route::apiResource('groups', 'GroupController')->only(['index', 'store']);
    Route::apiResource('groups', 'GroupController')->only(['show', 'update', 'destroy'])->middleware('can:has,group');
    Route::apiResource('groups/{group}/users', 'GroupUserController', ['as' => 'groups'])->middleware('can:has,group');

    Route::apiResource('sessions', 'SessionController')->only(['index', 'store']);
    Route::apiResource('sessions', 'SessionController')->only(['show', 'update', 'destroy'])->middleware('can:has,session');
    Route::apiResource('sessions/{session}/users', 'SessionUserController', ['as' => 'sessions'])->middleware('can:has,session');

    Route::apiResource('attributes', 'AttributeController')->only(['index', 'store']);
    Route::apiResource('attributes', 'AttributeController')->only(['show', 'update', 'destroy'])->middleware('can:has,attribute');

    Route::group(['prefix' => 'guest', 'namespace' => 'Guest'], function () {
        Route::apiResource('sessions', 'SessionController')->only(['index']);
        Route::apiResource('sessions', 'SessionController')->only(['show'])->middleware('can:participated,session');

    });
});
