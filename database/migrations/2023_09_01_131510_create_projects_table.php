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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50)->unique();
            $table->text('description');
            $table->string('cover_image')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('category');
            $table->string('project_url')->nullable();
            $table->string('github_url')->nullable();
            $table->string('client')->nullable();
            $table->string('role');
            $table->text('additional_notes')->nullable();
            $table->boolean('visibility')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
