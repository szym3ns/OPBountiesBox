<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\GetAllWantedPostersRequest;
use App\Services\WantedPoster\WantedPosterService;
use Illuminate\Http\Response;

final class WantedPosterAbstractController extends AbstractController
{
    public function __construct(
        private readonly WantedPosterService $wantedPosterService,
    ) {}

    public function getAllWantedPosters(GetAllWantedPostersRequest $request): Response
    {
        return $this->buildResponse(
            $this->wantedPosterService->getAllWantedPosters()
        );
    }
}
