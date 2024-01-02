<?php

declare(strict_types=1);

namespace App\Services\WantedPoster\DTO\Factory;

use App\Models\WantedPoster;
use App\Services\WantedPoster\DTO\WantedPosterDTO;
use App\Services\WantedPoster\DTO\WantedPosterDTOCollection;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

final class WantedPosterDTOFactory
{
    public static function createFromModel(WantedPoster $model): WantedPosterDTO
    {
        return new WantedPosterDTO(
            $model->getId(),
            $model->getType(),
            $model->getCharacterName(),
            $model->getAmount()
        );
    }

    public static function createCollectionFromEloquentCollection(
        EloquentCollection $collection
    ): WantedPosterDTOCollection {
        return WantedPosterDTOCollection::createFromIlluminateCollection(
            $collection->map(
                fn (WantedPoster $model) => self::createFromModel($model)
            )
        );
    }
}
