<?php

declare(strict_types=1);

namespace App\Common;

use JsonSerializable;

interface SerializableInterface extends JsonSerializable
{
    public function jsonSerialize(): array;
}
