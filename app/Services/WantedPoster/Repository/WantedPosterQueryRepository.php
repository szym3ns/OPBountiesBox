<?php

declare(strict_types=1);

namespace App\Services\WantedPoster\Repository;

use App\Common\AbstractRepository;
use App\Models\WantedPoster;
use App\Services\WantedPoster\DTO\Factory\WantedPosterDTOFactory;
use App\Services\WantedPoster\DTO\WantedPosterDTO;
use App\Services\WantedPoster\DTO\WantedPosterDTOCollection;

final class WantedPosterQueryRepository extends AbstractRepository
{
    public function getAllWantedPosters(): WantedPosterDTOCollection
    {
        return WantedPosterDTOFactory::createCollectionFromEloquentCollection(WantedPoster::all());
    }

    public function getWantedPoster(int $id): WantedPosterDTO
    {
        return WantedPosterDTOFactory::createFromModel(
            WantedPoster::findOrFail($id)
        );
    }
}
