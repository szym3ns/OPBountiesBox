<?php

declare(strict_types=1);

namespace App\Services\WantedPosterType\DTO;

use App\Common\AbstractCollection;

final class WantedPosterTypeDTOCollection extends AbstractCollection
{
    protected function getCollectionType(): string
    {
        return WantedPosterTypeDTO::class;
    }
}
