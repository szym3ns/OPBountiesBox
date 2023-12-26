<?php

declare(strict_types=1);

namespace App\Common;

use App\Common\Exception\MissingArrayKeysException;

abstract class AbstractFactory
{
    protected static function throwUnlessContainsKeys(
        array $array,
        array $requiredKeys,
        string $className
    ): void {
        if ($missingKeys = ArrayUtils::getMissingKeys($array, $requiredKeys)) {
            throw new MissingArrayKeysException($className, $missingKeys);
        }
    }
}
