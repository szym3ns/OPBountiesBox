<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class WantedPoster extends Model
{
    use HasFactory;

    public function getId(): int
    {
        return $this->getAttribute('id');
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
