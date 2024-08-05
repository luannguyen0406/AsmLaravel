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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Tiêu đề của tin
            $table->text('content'); // Nội dung của tin
            $table->string('author'); // Tác giả của tin
            $table->string('image')->nullable(); // Tác giả của tin
            $table->string('description'); // Tác giả của tin
            $table->integer('view');
            $table->unsignedBigInteger('idCategory'); 
            // $table->timestamp('published_at')->nullable(); // Thời gian đăng tin
            $table->foreign('idCategory')->references('id')->on('category'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
