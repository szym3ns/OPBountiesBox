<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property WantedPosterType $type
 */
final class WantedPoster extends Model
{
    use HasFactory;

    public function type(): BelongsTo
    {
        return $this->belongsTo(WantedPosterType::class);
    }

    public function getId(): int
    {
        return $this->getAttribute('id');
    }

    public function getType(): string
    {
        return $this->type->getName();
    }

    public function getCharacterName(): string
    {
        return $this->getAttribute('character_name');
    }

    public function getAmount(): int
    {
        return $this->getAttribute('amount');
    }
}
