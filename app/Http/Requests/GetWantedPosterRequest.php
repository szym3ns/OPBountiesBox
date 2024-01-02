<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class GetWantedPosterRequest extends FormRequest
{
    public function rules(): array
    {
        return [];
    }

    public function getWantedPosterId(): int
    {
        return intval($this->route('id'));
    }
}
