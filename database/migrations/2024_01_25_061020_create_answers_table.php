<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions_answers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('answer_name', 255)->nullable();
            $table->string('answer_code', 255)->nullable();
            $table->float('answer_point', 15, 0)->default(0)->nullable();
            $table->boolean('is_correct')->default(0)->nullable();
            $table->uuid('question_id')->nullable();
            $table->uuid('question_category_id')->nullable();
            $table->uuid('question_sub_category_id')->nullable();
            $table->uuid('helper_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions_answers');
    }
};
