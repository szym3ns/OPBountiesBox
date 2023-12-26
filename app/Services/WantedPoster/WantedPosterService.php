<?php

declare(strict_types=1);

namespace App\Services\WantedPoster;

use App\Repositories\WantedPosterQueryRepository;
use App\Services\WantedPoster\DTO\WantedPosterDTOCollection;

final class WantedPosterService
{
    public function __construct(
        private readonly WantedPosterQueryRepository $queryRepository,
    ) {}

    public function getAllWantedPosters(): WantedPosterDTOCollection
    {
        return $this->queryRepository->getAllWantedPosters();
    }
}
