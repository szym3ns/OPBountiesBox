<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dictionary.wanted_poster_types', function (Blueprint $table): void {
            $table
                ->id();

            $table
                ->string('name');

            $table
                ->string('short_name');

            $table
                ->integer('created_by');

            $table
                ->integer('updated_by')
                ->nullable();

            $table
                ->timestamps();

            // Foreign keys
            $table
                ->foreign('created_by')
                ->on('users')
                ->references('id');

            $table
                ->foreign('updated_by')
                ->on('users')
                ->references('id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dictionary.wanted_poster_types');
    }
};
