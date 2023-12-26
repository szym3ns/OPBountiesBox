<?php

declare(strict_types=1);

namespace App\Common\Exception;

use Symfony\Component\HttpFoundation\Exception\BadRequestException;

final class MissingArrayKeysException extends BadRequestException
{
    public function __construct(string $className, array $missingKeys)
    {
        parent::__construct(
            sprintf(
                'Brak wymaganych danych przy budowaniu obiektu {%s}. Brakujące wymagane klucze: %s',
                $className,
                json_encode($missingKeys)
            )
        );
    }
}
