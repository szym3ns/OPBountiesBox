<?php

declare(strict_types=1);

namespace App\Common;

trait SerializableTrait
{
    use ArrayableTrait;

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
