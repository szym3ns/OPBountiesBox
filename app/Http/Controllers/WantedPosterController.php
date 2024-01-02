<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\GetAllWantedPostersRequest;
use App\Http\Requests\GetWantedPosterTypesRequest;
use App\Http\Requests\GetWantedPosterRequest;
use App\Services\WantedPoster\WantedPosterService;
use App\Services\WantedPosterType\WantedPosterTypeService;
use Illuminate\Http\Response;

final class WantedPosterController extends AbstractController
{
    public function __construct(
        private readonly WantedPosterService $wantedPosterService,
        private readonly WantedPosterTypeService $wantedPosterTypeService,
    ) {}

    public function getAllWantedPosters(GetAllWantedPostersRequest $request): Response
    {
        return $this->buildResponse(
            $this->wantedPosterService->getAllWantedPosters()
        );
    }

    public function getWantedPoster(GetWantedPosterRequest $request): Response
    {
        return $this->buildResponse(
            $this->wantedPosterService->getWantedPoster($request->getWantedPosterId())
        );
    }

    public function getWantedPosterTypes(GetWantedPosterTypesRequest $request): Response
    {
        return $this->buildResponse(
            $this->wantedPosterTypeService->getAllWantedPosterTypes()
        );
    }
}
