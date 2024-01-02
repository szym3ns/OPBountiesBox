<?php

declare(strict_types=1);

namespace App\Common;

trait ArrayableTrait
{
    public function toArray(): array
    {
        $result = [];

        foreach ($this as $property => $value) {
            if ($value instanceof ArrayableInterface) {
                $result[$property] = $value->toArray();
            } else {
                $result[$property] = $value;
            }
        }

        return $result;
    }
}
