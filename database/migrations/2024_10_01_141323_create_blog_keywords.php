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
        Schema::create('blog_keywords', function (Blueprint $table) {
            $table->foreignUuid('blog_id')->constrained('blogs')->onDelete('cascade');
            $table->foreignId('keyword_id')->constrained('keywords')->onDelete('cascade');
            $table->timestamps();
            $table->primary(['blog_id','keyword_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_keywords');
    }
};
