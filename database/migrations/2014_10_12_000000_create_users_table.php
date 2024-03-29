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
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->integer('plan')->nullable();
            $table->date('plan_expire_date')->nullable();
            $table->string('type', 20)->nullable();
            $table->string('avatar', 100)->nullable();
            $table->string('lang', 100)->nullable();
            $table->integer('created_by')->default(0);
            $table->integer('default_pipeline')->nullable();
            $table->integer('delete_status')->default(1);
            $table->integer('is_active')->default(1);
            $table->string('wallet_address')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
