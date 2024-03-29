<?php

use Hyvor\Helper\Media\MediaController;
use Illuminate\Support\Facades\Route;

Route::get(config('hyvor-helper.media.path') . '/{path}', [MediaController::class, 'serve'])
    ->where('path', '.*');