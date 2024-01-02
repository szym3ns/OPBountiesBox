<?php

declare(strict_types=1);

namespace App\Services\WantedPoster;

use App\Services\WantedPoster\DTO\WantedPosterDTO;
use App\Services\WantedPoster\DTO\WantedPosterDTOCollection;
use App\Services\WantedPoster\Repository\WantedPosterQueryRepository;

final class WantedPosterService
{
    public function __construct(
        private readonly WantedPosterQueryRepository $queryRepository,
    ) {}

    public function getAllWantedPosters(): WantedPosterDTOCollection
    {
        return $this->queryRepository->getAllWantedPosters();
    }

    public function getWantedPoster(int $id): WantedPosterDTO
    {
        return $this->queryRepository->getWantedPoster($id);
    }
}
