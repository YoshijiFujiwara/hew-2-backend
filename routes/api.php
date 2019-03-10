<?php

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {

    Route::post('register', 'AuthController@register')->name('auth.register');
    Route::post('login', 'AuthController@login')->name('auth.login');
    Route::post('logout', 'AuthController@logout')->name('auth.logout');
    Route::post('refresh', 'AuthController@refresh')->name('auth.refresh');
    Route::get('me', 'AuthController@me')->middleware('cache')->name('auth.me');

});

// test
//Route::get('hotpepper/test', 'HotPepperController@test')->name('hotpepper.test');


Route::middleware(['JWT', 'cache'])->group(function () {

    Route::post('device_token', 'PushNotificationController@storeDeviceToken')->name('push_notification.store_device_token');

    Route::apiResource('friends', 'FriendController')->only(['index', 'store']);
    Route::group(['prefix' => 'friends'], function () {
        Route::get('blocking', 'FriendController@blockingUsers')->name('friends.blocking_users');
        Route::get('block_me', 'FriendController@blockMeUsers')->name('friends.block_me_users');
        Route::get('waiting', 'FriendController@waitingFriends')->name('friends.waiting_friends');
        Route::get('permitting', 'FriendController@permittingUsers')->name('friends.permitting');
        Route::get('requested', 'FriendController@friendRequestUsers')->name('friends.friend_request_users');
        Route::post('permit', 'FriendController@permit')->name('friends.permit');
        Route::post('reject', 'FriendController@reject')->name('friends.reject');
        Route::put('{friend}/attribute', 'FriendController@updateAttribute')->name('friends.update_attribute')->middleware('can:has,friend');
        Route::put('{friend}/cancel_invitation', 'FriendController@cancelInvitation')->name('friends.cancel_invitation');
        Route::put('{friend}/block', 'FriendController@block')->name('friends.block');
        Route::put('{friend}/un_block', 'FriendController@unBlock')->name('friends.un_block');
    });
    Route::apiResource('friends', 'FriendController')->only(['show', 'destroy'])->middleware('can:has,friend');

    Route::apiResource('groups', 'GroupController')->only(['index', 'store']);
    Route::apiResource('groups', 'GroupController')->only(['show', 'update', 'destroy'])->middleware('can:has,group');
    Route::get('groups/{group}/users/can_add', 'GroupController@canAddUsers')->name('groups.can_add_users')->middleware('can:has,group');
    Route::apiResource('groups/{group}/users', 'GroupUserController', ['as' => 'groups'])->middleware('can:has,group');

    Route::apiResource('default_settings', 'DefaultSettingController')->only(['index', 'store']);
    Route::apiResource('default_settings', 'DefaultSettingController')->only(['show', 'update', 'destroy'])->middleware('can:has,default_setting');

    Route::apiResource('sessions', 'SessionController')->only(['index', 'store']);
    Route::get('sessions/with_only_allow_users', 'SessionController@indexWithOnlyAllowUsers')->name('sessions.index_with_only_allow_users');
    Route::prefix('sessions')->group(function () {
        Route::get('not_start', 'SessionController@notStart')->name('sessions.not_start');
        Route::get('on_going', 'SessionController@onGoing')->name('sessions.on_going');
        Route::get('not_payment_complete', 'SessionController@notPaymentComplete')->name('sessions.not_payment_complete');
        Route::get('history', 'SessionController@history')->name('sessions.history');
        Route::get('complete', 'SessionController@complete')->name('sessions.complete');
    });
    Route::apiResource('sessions', 'SessionController')->only(['show', 'update', 'destroy'])->middleware('can:has,session');
    Route::get('sessions/{session}/with_only_allow_users', 'SessionController@showWithOnlyAllowUsers')->name('sessions.show_with_only_allow_users')->middleware('can:has,session');
    Route::get('sessions/{session}/users/can_add', 'SessionController@canAddUsers')->name('sessions.can_add_users')->middleware('can:has,session');
    Route::get('sessions/{session}/groups/can_add', 'SessionController@canAddGroups')->name('sessions.can_add_groups')->middleware('can:has,session');
    Route::apiResource('sessions/{session}/users', 'SessionUserController', ['as' => 'sessions'])->middleware('can:has,session');
    Route::put('sessions/{session}/users/{user}/switch_paid', 'SessionUserController@switchPaid')->name('sessions.users.switch_paid')->middleware('can:has,session');
    Route::post('sessions/{session}/groups/{group}', 'SessionUserController@storeGroup')->name('sessions.users.store_group')->middleware(['can:has,session', 'can:has,group']);

    Route::apiResource('attributes', 'AttributeController')->only(['index', 'store']);
    Route::apiResource('attributes', 'AttributeController')->only(['show', 'update', 'destroy'])->middleware('can:has,attribute');

    Route::group(['prefix' => 'guest', 'namespace' => 'Guest', 'as' => 'guests.'], function () {
        Route::apiResource('sessions', 'SessionController')->only(['index']);
        Route::get('sessions/wait', 'SessionController@waitSessions')->name('sessions.wait');
        Route::get('sessions/allow', 'SessionController@allowSessions')->name('sessions.allow');
        Route::get('sessions/deny', 'SessionController@denySessions')->name('sessions.deny');
        Route::apiResource('sessions', 'SessionController')->only(['show', 'update'])->middleware('can:participated,session');

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

    // hotpepper
    Route::post('hotpepper/recommend', 'HotPepperController@recommend')->name('hotpepper.recommend');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'admin/auth/',
    'as' => 'admin.',
], function () {
    Route::post('register', 'AuthController@adminRegister')->name('auth.register');
    Route::post('login', 'AuthController@adminLogin')->name('auth.login');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin'
], function () {
    Route::apiResource('groups', 'GroupController')->only(['index', 'show', 'destroy']);
    Route::delete('groups/{group}/users/{user}', 'GroupUserController@destroy')->name('groups.users.destroy');

    Route::apiResource('sessions', 'SessionController')->only(['index', 'show', 'destroy']);
    Route::delete('sessions/{session}/users/{user}', 'SessionUserController@destroy')->name('sessions.users.destroy');

    Route::apiResource('users', 'UserController')->only(['index', 'show', 'destroy']);

    Route::apiResource('attributes', 'AttributeController')->only(['index', 'show', 'destroy']);

    Route::apiResource('default_settings', 'DefaultSettingController')->only(['index', 'show', 'destroy']);

    Route::apiResource('shops', 'ShopController')->only(['index', 'show']);
    Route::prefix('shops/{shop}')->group(function () {
        Route::get('sessions', 'ShopSessionController@index')->name('shops.sessions.index');
    });

    Route::get('users', 'UserController@index')->name('users.index');
    Route::group([
        'prefix' => 'users/{user}',
    ], function () {

        Route::get('', 'UserController@show')->name('users.show');
        Route::delete('', 'UserController@destroy')->name('users.destroy');

        Route::prefix('friends')->group(function () {
            Route::get('', 'UserFriendController@index')->name('users.friends.index');
            Route::delete('{friend}', 'UserFriendController@destroy')->name('users.friends.destroy');
        });

        Route::prefix('groups')->group(function () {
            Route::get('', 'UserGroupController@index')->name('users.groups.index');
            Route::delete('{group}', 'UserGroupController@destroy')->name('users.groups.destroy');

        });

        Route::prefix('sessions')->group(function () {
            Route::get('', 'UserSessionController@index')->name('users.sessions.index');
            Route::delete('{session}', 'UserSessionController@destroy')->name('users.sessions.destroy');
        });

        Route::prefix('attributes')->group(function () {
            Route::get('', 'UserAttributeController@index')->name('users.attributes.index');
            Route::delete('{attribute}', 'UserAttributeController@destroy')->name('users.attributes.destroy');

        });

        Route::prefix('default_settings')->group(function () {
            Route::get('', 'UserDefaultSettingController@index')->name('users.default_settings.index');
            Route::delete('{default_setting}', 'UserDefaultSettingController@destroy')->name('users.default_settings.destroy');

        });

        // ゲストとしてのルート
        Route::prefix('guests')->group(function () {
            Route::prefix('sessions')->group(function () {
                Route::get('', 'UserGuestSessionController@index')->name('users.guests.sessions.index');
                Route::delete('{session}', 'UserGuestSessionController@destroy')->name('users.guests.sessions.destroy');

            });

            Route::prefix('groups')->group(function () {
                Route::get('', 'UserGuestGroupController@index')->name('users.guests.groups.index');
                Route::delete('{group}', 'UserGuestGroupController@destroy')->name('users.guests.groups.destroy');

            });
        });

    });

    Route::group([
        'prefix' => 'test',
    ], function () {
        Route::post('notification', 'TestController@notification')->name('test.notification');

        Route::get('realtime', 'TestController@realtime')->name('test.realtime');
    });
});
