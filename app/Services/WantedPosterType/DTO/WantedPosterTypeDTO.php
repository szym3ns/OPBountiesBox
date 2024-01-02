<?php

declare(strict_types=1);

namespace App\Services\WantedPosterType\DTO;

use App\Common\SerializableInterface;
use App\Common\SerializableTrait;

final class WantedPosterTypeDTO implements SerializableInterface
{
    use SerializableTrait;

    public function __construct(
        public readonly int $id,
        public readonly string $shortName,
        public readonly string $name,
        public readonly string $createdAt,
        public readonly int $createdBy,
    ) {}
}
