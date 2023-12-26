<?php

declare(strict_types=1);

namespace App\Services\WantedPoster\DTO;

use App\Common\AbstractCollection;

final class WantedPosterDTOCollection extends AbstractCollection
{
    protected function getCollectionType(): string
    {
        return WantedPosterDTO::class;
    }
}
