<?php

declare(strict_types=1);

namespace App\Services\WantedPosterType\DTO\Factory;

use App\Models\WantedPosterType;
use App\Services\WantedPosterType\DTO\WantedPosterTypeDTO;
use App\Services\WantedPosterType\DTO\WantedPosterTypeDTOCollection;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

final class WantedPosterTypeDTOFactory
{
    public static function createFromModel(WantedPosterType $model): WantedPosterTypeDTO
    {
        return new WantedPosterTypeDTO(
            $model->getId(),
            $model->getShortName(),
            $model->getName(),
            $model->getCreatedAt(),
            $model->getCreatedBy()
        );
    }

    public static function createCollectionFromEloquentCollection(
        EloquentCollection $collection
    ): WantedPosterTypeDTOCollection {
        return WantedPosterTypeDTOCollection::createFromIlluminateCollection(
            $collection->map(
                fn (WantedPosterType $model) => self::createFromModel($model)
            )
        );
    }
}
