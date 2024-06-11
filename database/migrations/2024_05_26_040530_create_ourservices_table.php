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
        Schema::create('ourservices', function (Blueprint $table) {
            $table->id();
            $table->string('ourservice_tag');
            $table->string('ourservies_shortsdescription');
            $table->string('main_title');
            $table->string('main_description');
            $table->string('main_logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ourservices');
    }
};
