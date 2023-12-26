<?php

declare(strict_types=1);

use App\Http\Controllers\WantedPosterAbstractController;
use Illuminate\Support\Facades\Route;

Route::prefix('/v1')->group(function (): void {
    Route::get('/wanted-posters', [WantedPosterAbstractController::class, 'getAllWantedPosters']);
});
