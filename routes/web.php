<?php

use Illuminate\Support\Facades\Artisan;

Route::get('/tasks/queue', function () {
    Artisan::call('queue:work',['--stop-when-empty' => true]);
    return response('Queue started.', 200)->header('Content-Type', 'text/plain');
})->name('tasks.queue');