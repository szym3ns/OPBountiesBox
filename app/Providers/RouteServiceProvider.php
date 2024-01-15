<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    private const AUTH_API_PATTERNS = [
        '/api/v1/' => 'api.php',
    ];

    public const HOME = '/home';

    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request): Limit {
            return Limit::perMinute(60)
                ->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function (): void {
            Route::prefix('/api/v1/openapi')
                ->group(base_path('routes/openapi.php'));

            foreach (self::AUTH_API_PATTERNS as $prefix => $fileName) {
                Route::middleware('api')
                    ->prefix($prefix)
                    ->group(base_path("routes/$fileName"));
            }

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}
