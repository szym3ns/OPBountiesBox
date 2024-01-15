<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('wanted_posters', function (Blueprint $table): void {
            $table
                ->id();

            $table
                ->boolean('enabled');

            $table
                ->integer('type_id');

            $table
                ->string('character_name');

            $table
                ->bigInteger('amount');

            $table
                ->integer('created_by');

            $table
                ->integer('updated_by')
                ->nullable();

            $table
                ->text('photo_hash');

            $table
                ->timestamps();

            // Foreign keys
            $table
                ->foreign('type_id')
                ->on('dictionary.wanted_poster_types')
                ->references('id');

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
        Schema::dropIfExists('wanted_posters');
    }
};
