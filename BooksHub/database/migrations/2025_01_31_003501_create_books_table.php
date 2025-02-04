<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->unsignedBigInteger('category_id');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2)->default(0.00);
            $table->enum('format', ['PDF', 'Hard Copy', 'CD']);
            $table->string('file_url')->nullable();
            $table->string('cover_image')->nullable();
            $table->integer('stock_quantity')->default(0);
            $table->string('language')->default('English');
            $table->integer('pages')->nullable();
            $table->date('publication_date')->nullable();
            $table->string('isbn')->nullable();
            $table->decimal('rating', 3, 2)->default(0.00); // Stores the average rating
            $table->integer('rating_count')->default(0); // Stores the number of ratings
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
