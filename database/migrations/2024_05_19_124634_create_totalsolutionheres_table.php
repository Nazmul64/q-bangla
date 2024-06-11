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
        Schema::create('totalsolutionheres', function (Blueprint $table) {
            $table->id();
            $table->string('solution_title');
            $table->longText('solution_description');
            $table->string('solution_one');
            $table->string('solution_two');
            $table->string('solution_three');
            $table->string('solution_four');
            $table->string('solution_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('totalsolutionheres');
    }
};
