<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Common\HttpCode;
use App\Constants\AppConst;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpFoundation\Response;

final class AuthenticateApi
{
    private const AUTHORIZATION_HEADER_NAME = 'Authorization';

    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->hasHeader(self::AUTHORIZATION_HEADER_NAME)) {
            return $this->getUnauthorizedResponse();
        }

        $apiToken = Config::get('app.' . AppConst::API_TOKEN_CONFIG_KEY);

        if ($request->header(self::AUTHORIZATION_HEADER_NAME) !== $apiToken) {
            return $this->getUnauthorizedResponse();
        }

        return $next($request);
    }

    private function getUnauthorizedResponse(): Response
    {
        return response(['Unauthorized'], HttpCode::UNAUTHORIZED->value);
    }
}
