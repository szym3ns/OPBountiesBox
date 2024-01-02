<?php

declare(strict_types=1);

namespace App\Common;

interface ArrayableInterface
{
    public function toArray(): array;
}
