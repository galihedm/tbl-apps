<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsCategoriesContentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions_categories_contents', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('question_categories_id')->nullable();
            $table->string('content_name', 255)->nullable();
            $table->longText('content_icon')->nullable();
            $table->integer('content_quota')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions_categories_contents');
    }
};
