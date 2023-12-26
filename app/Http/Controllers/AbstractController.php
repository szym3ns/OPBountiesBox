<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Common\HttpCode;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use JsonSerializable;

abstract class AbstractController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    final protected function buildResponse(
        JsonSerializable|array|string|null $content = '',
        HttpCode|int $statusCode = HttpCode::OK
    ): Response {
        return response($content)
            ->setStatusCode(
                $statusCode instanceof HttpCode
                    ? $statusCode->value : $statusCode
            );
    }
}
