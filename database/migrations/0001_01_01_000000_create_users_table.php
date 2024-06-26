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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('number')->nullable();
            $table->string('profile_photo')->default('logo.jpg');
            $table->string('country')->nullable();
            $table->string('user_name')->nullable();
            $table->string('sponsor_id')->nullable();
            $table->float('total_deposite')->default(0);
            $table->string('placement_id')->nullable();
            $table->bigInteger('direct_group')->default(0);
            $table->bigInteger('total_group')->default(0);
            $table->tinyInteger('is_active')->default(0);
            $table->string('position_set')->default(0);
            $table->string('active_date')->nullable();
            $table->float('total_income')->default(0);
            $table->float('total_widthrawl')->default(0);
            $table->float('current_withdrawl_request')->default(0);
            $table->bigInteger('total_group_active')->default(0);
            $table->float('total_group_deposite')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->integer('role')->default(1)->comment('1=customer,2=admin');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
