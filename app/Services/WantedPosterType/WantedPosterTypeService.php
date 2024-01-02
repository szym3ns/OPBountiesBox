<?php

declare(strict_types=1);

namespace App\Services\WantedPosterType;

use App\Services\WantedPosterType\DTO\WantedPosterTypeDTOCollection;
use App\Services\WantedPosterType\Repository\WantedPosterTypeQueryRepository;

final class WantedPosterTypeService
{
    public function __construct(
        private readonly WantedPosterTypeQueryRepository $queryRepository,
    ) {}

    public function getAllWantedPosterTypes(): WantedPosterTypeDTOCollection
    {
        return $this->queryRepository->getAllWantedPosterTypes();
    }
}
