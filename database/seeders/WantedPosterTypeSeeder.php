<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use App\Models\WantedPosterType;
use Illuminate\Database\Seeder;

final class WantedPosterTypeSeeder extends Seeder
{
    public function run(): void
    {
        $systemUserId =
            User::where('name', '=', 'system')
                ->firstOrFail()
                ->getId();

        WantedPosterType::firstOrCreate(
            ['name' => 'only alive'],
            [
                'short_name' => 'only alive',
                'created_at' => now(),
                'created_by' => $systemUserId,
            ]
        );
    }
}
