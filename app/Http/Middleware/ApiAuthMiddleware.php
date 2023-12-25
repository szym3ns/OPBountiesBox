<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Constants\AppConst;
use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

final class ApiAuthMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $authorizationHeader = $request->header('Authorization');

        if (!is_string($authorizationHeader)) {
            throw new AuthorizationException('Missing authorization header.');
        }

        $apiToken = config('app')[AppConst::API_TOKEN_ENV_KEY] ?? null;

        if (is_null($apiToken) || $authorizationHeader !== $apiToken) {
            throw new AuthorizationException('Invalid authorization token.');
        }

        return $next($request);
    }
}
