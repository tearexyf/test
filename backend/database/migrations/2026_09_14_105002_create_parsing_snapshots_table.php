<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('parsing_snapshots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained()->cascadeOnDelete();

            $table->decimal('rating_avg', 3, 2)->nullable();
            $table->unsignedInteger('ratings_count')->default(0);
            $table->unsignedInteger('reviews_count')->default(0);
            $table->unsignedInteger('new_reviews_count')->default(0);

            $table->timestamp('parsed_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('parsing_snapshots');
    }
};