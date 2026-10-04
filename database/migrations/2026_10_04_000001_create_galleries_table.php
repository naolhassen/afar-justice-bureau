<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->json('title')->nullable();
            $table->string('slug')->unique();
            $table->string('image');
            $table->integer('order')->default(0);
            $table->string('status')->default('published');
            $table->timestamp('published_at')->nullable();
            $table->foreignId('author_id')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();

            $table->index('status');
            $table->index('order');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
