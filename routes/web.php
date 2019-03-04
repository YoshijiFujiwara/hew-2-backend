<?php

use Illuminate\Support\Facades\Artisan;

Route::get('/tasks/queue', function () {
    Artisan::call('schedule:run');
    return response('schedule started.', 200)->header('Content-Type', 'text/plain');
})->name('tasks.queue');