<?php

declare(strict_types=1);

use App\Http\Controllers\WantedPosterController;
use Illuminate\Support\Facades\Route;

Route::get('/wanted-posters', [WantedPosterController::class, 'getAllWantedPosters']);
