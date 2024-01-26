<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('question_categories_contents_id')->nullable();
            $table->longText('question_text')->nullable();
            $table->longText('question_content_text')->nullable();
            $table->uuid('answer_id')->nullable();
            $table->float('true_answer_point', 15, 0)->default(0)->nullable();
            $table->float('false_answer_point', 15, 0)->default(0)->nullable();
            $table->uuid('helper_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
