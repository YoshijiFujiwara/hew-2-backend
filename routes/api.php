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
    Route::apiResource('friends', 'FriendController')->only(['show', 'destroy'])->middleware('can:has,friend');
    Route::group(['prefix' => 'friends'], function () {
        Route::get('blocking', 'FriendController@blockingUsers')->name('friends.blocking_users');
        Route::get('block_me', 'FriendController@blockMeUsers')->name('friends.block_me_users');
        Route::get('waiting', 'FriendController@waitingFriends')->name('friends.waiting_friends');
        Route::get('permitting', 'FriendController@permittingUsers')->name('friends.permitting');
        Route::get('requested', 'FriendController@friendRequestUsers')->name('friends.friend_request_users');
        Route::post('permit', 'FriendController@permit')->name('friends.permit');
        Route::post('reject', 'FriendController@reject')->name('friends.reject');
        Route::put('{friend}/cancel_invitation', 'FriendController@cancelInvitation')->name('friends.cancel_invitation');
        Route::put('{friend}/block', 'FriendController@block')->name('friends.block');
        Route::put('{friend}/un_block', 'FriendController@unBlock')->name('friends.un_block');
    });

    Route::apiResource('groups', 'GroupController')->only(['index', 'store']);
    Route::apiResource('groups', 'GroupController')->only(['show', 'update', 'destroy'])->middleware('can:has,group');
    Route::get('groups/{group}/users/can_add', 'GroupController@canAddUsers')->name('groups.can_add_users')->middleware('can:has,group');
    Route::apiResource('groups/{group}/users', 'GroupUserController', ['as' => 'groups'])->middleware('can:has,group');

    Route::apiResource('default_settings', 'DefaultSettingController')->only(['index', 'store']);
    Route::apiResource('default_settings', 'DefaultSettingController')->only(['show', 'update', 'destroy'])->middleware('can:has,default_setting');

    Route::apiResource('sessions', 'SessionController')->only(['index', 'store']);
    Route::apiResource('sessions', 'SessionController')->only(['show', 'update', 'destroy'])->middleware('can:has,session');
    Route::apiResource('sessions/{session}/users', 'SessionUserController', ['as' => 'sessions'])->middleware('can:has,session');

    Route::apiResource('attributes', 'AttributeController')->only(['index', 'store']);
    Route::apiResource('attributes', 'AttributeController')->only(['show', 'update', 'destroy'])->middleware('can:has,attribute');

    Route::group(['prefix' => 'guest', 'namespace' => 'Guest', 'as' => 'guests.'], function () {
        Route::apiResource('sessions', 'SessionController')->only(['index']);
        Route::apiResource('sessions', 'SessionController')->only(['show'])->middleware('can:participated,session');

    });

    Route::group(['prefix' => 'profile'], function () {
        Route::put('update', 'ProfileController@update')->name('profile.update');
    });

    Route::group(['prefix' => 'search'], function () {
        Route::get('can_add_friend_users', 'SearchController@canAddFriendUsers')->name('search.can_add_friend_users');
        Route::post('forward_by_username', 'SearchController@forwardSearchByUsername')->name('search.forward_by_username');
        Route::post('perfect_by_unique_id', 'SearchController@perfectSearchByUniqueId')->name('search.perfect_by_unique_id');
        Route::post('forward_by_unique_id', 'SearchController@forwardSearchByUniqueId')->name('search.forward_by_unique_id');
    });
});
//
//Route::group([
//    'prefix' => 'admin',
//    'as' => 'admin.',
//    'namespace' => 'Admin'
//], function () {
//    Route::apiResource('users', 'UserController');
//    Route::apiResource('groups', 'GroupController');
//    Route::apiResource('sessions', 'SessionController');
//});
