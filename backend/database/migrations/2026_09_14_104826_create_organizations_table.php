<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->string('yandex_url')->unique();
            $table->string('yandex_org_id')->nullable();
            $table->string('name')->nullable();

            $table->decimal('rating_avg', 3, 2)->nullable();
            $table->unsignedInteger('ratings_count')->default(0);
            $table->unsignedInteger('reviews_count')->default(0);

            $table->enum('status', ['pending', 'processing', 'done', 'failed'])->default('pending');
            $table->text('last_error')->nullable();
            $table->timestamp('last_parsed_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};