<?php

declare(strict_types=1);

namespace App\Common;

enum HttpCode: int
{
    case OK = 200;
    case CREATED = 201;
    case NO_CONTENT = 204;
    case BAD_REQUEST = 400;
    case FORBIDDEN = 403;
    case NOT_FOUND = 404;
    case CONFLICT = 409;
}
