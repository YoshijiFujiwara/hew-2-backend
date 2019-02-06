<?php

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {

    Route::post('register', 'AuthController@register')->name('auth.register');
    Route::post('login', 'AuthController@login')->name('auth.login');
    Route::post('logout', 'AuthController@logout')->name('auth.logout');
    Route::post('refresh', 'AuthController@refresh')->name('auth.refresh');
    Route::post('me', 'AuthController@me')->name('auth.me');

});

Route::middleware('JWT')->group(function () {
    Route::apiResource('friends', 'FriendController')->only(['index', 'store']);
    Route::get('friends/blocked', 'FriendController@blockedUsers')->name('friends.blockedUsers');
    Route::get('friends/waiting', 'FriendController@waitingFriends')->name('friends.waitingFriends');
    Route::get('friends/requested', 'FriendController@friendRequestUsers')->name('friends.friendRequestUsers');
    Route::post('friends/permit', 'FriendController@permit')->name('friends.permit');
    Route::post('friends/reject', 'FriendController@reject')->name('friends.reject');
    Route::apiResource('friends', 'FriendController')->only(['show', 'destroy'])->middleware('can:has,friend');

    Route::apiResource('groups', 'GroupController')->only(['index', 'store']);
    Route::apiResource('groups', 'GroupController')->only(['show', 'update', 'destroy'])->middleware('can:has,group');
    Route::apiResource('groups/{group}/users', 'GroupUserController', ['as' => 'groups'])->middleware('can:has,group');

    Route::apiResource('sessions', 'SessionController')->only(['index', 'store']);
    Route::apiResource('sessions', 'SessionController')->only(['show', 'update', 'destroy'])->middleware('can:has,session');
    Route::apiResource('sessions/{session}/users', 'SessionUserController', ['as' => 'sessions'])->middleware('can:has,session');

    Route::apiResource('attributes', 'AttributeController')->only(['index', 'store']);
    Route::apiResource('attributes', 'AttributeController')->only(['show', 'update', 'destroy'])->middleware('can:has,attribute');

    Route::group(['prefix' => 'guest', 'namespace' => 'Guest', 'as' => 'guests.'], function () {
        Route::apiResource('sessions', 'SessionController')->only(['index']);
        Route::apiResource('sessions', 'SessionController')->only(['show'])->middleware('can:participated,session');

    });
});
