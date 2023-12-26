<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\WantedPoster;
use App\Services\WantedPoster\DTO\Factory\WantedPosterDTOFactory;
use App\Services\WantedPoster\DTO\WantedPosterDTOCollection;

final class WantedPosterQueryRepository extends AbstractRepository
{
    public function getAllWantedPosters(): WantedPosterDTOCollection
    {
        return WantedPosterDTOFactory::createCollectionFromEloquentCollection(WantedPoster::all());
    }
}
