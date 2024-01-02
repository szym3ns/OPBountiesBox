<?php

declare(strict_types=1);

use App\Common\RegexConst;
use App\Http\Controllers\WantedPosterController;
use Illuminate\Support\Facades\Route;

Route::prefix('/wanted-posters')->group(static function (): void {
    Route::get('/', [WantedPosterController::class, 'getAllWantedPosters']);
    Route::get('/{id}', [WantedPosterController::class, 'getWantedPoster'])
        ->where([
            'id' => RegexConst::IDENTIFIER_REGEX,
        ]);
});
