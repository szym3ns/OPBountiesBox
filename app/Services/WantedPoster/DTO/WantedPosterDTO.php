<?php

declare(strict_types=1);

namespace App\Services\WantedPoster\DTO;

final class WantedPosterDTO
{
    public function __construct(
        public readonly int $id,
        public readonly string $characterName,
        public readonly int $amount,
    ) {}
}
