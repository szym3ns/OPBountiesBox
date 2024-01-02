<?php

declare(strict_types=1);

namespace App\Common;

use ReflectionClass;

trait ArrayableTrait
{
    public function toArray(): array
    {
        $reflection = new ReflectionClass($this);
        $result = [];

        foreach ($reflection->getProperties() as $property) {
            $propertyName = $property->getName();
            $propertyValue = $property->getValue($this);

            if ($propertyValue instanceof ArrayableInterface) {
                $result[$propertyName] = $propertyValue->toArray();
            } elseif (is_object($propertyValue) && enum_exists($propertyValue::class)) {
                $result[$propertyName] = $propertyValue->value;
            } else {
                $result[$propertyName] = $propertyValue;
            }
        }

        return $result;
    }
}
