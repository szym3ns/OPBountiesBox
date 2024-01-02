<?php

declare(strict_types=1);

namespace App\Services\WantedPosterType\Repository;

use App\Common\AbstractRepository;
use App\Models\WantedPosterType;
use App\Services\WantedPosterType\DTO\Factory\WantedPosterTypeDTOFactory;
use App\Services\WantedPosterType\DTO\WantedPosterTypeDTOCollection;

final class WantedPosterTypeQueryRepository extends AbstractRepository
{
    public function getAllWantedPosterTypes(): WantedPosterTypeDTOCollection
    {
        return WantedPosterTypeDTOFactory::createCollectionFromEloquentCollection(WantedPosterType::all());
    }
}
