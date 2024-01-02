<?php

declare(strict_types=1);

namespace App\Services\WantedPoster\DTO;

use App\Common\SerializableInterface;
use App\Common\SerializableTrait;

final class WantedPosterDTO implements SerializableInterface
{
    use SerializableTrait;

    public function __construct(
        public readonly int $id,
        public readonly string $type,
        public readonly string $characterName,
        public readonly int $amount,
    ) {}
}
