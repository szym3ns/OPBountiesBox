<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class WantedPosterType extends Model
{
    use HasFactory;

    protected $table = 'dictionary.wanted_poster_types';

//    public function wantedPoster(): BelongsTo
//    {
//        return $this->belongsTo(WantedPoster::class);
//    }

    public function getId(): int
    {
        return $this->getAttribute('id');
    }

    public function getShortName(): string
    {
        return $this->getAttribute('short_name');
    }

    public function getName(): string
    {
        return $this->getAttribute('name');
    }

    public function getCreatedBy(): int
    {
        return $this->getAttribute('created_by');
    }

    public function getCreatedAt(): string
    {
        /** @var Carbon $createdAt */
        $createdAt = $this->getAttribute('created_at');

        return $createdAt->format('Y-m-d H:i:s');
    }
}
