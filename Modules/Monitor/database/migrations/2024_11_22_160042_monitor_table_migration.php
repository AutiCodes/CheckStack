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
        Schema::create('monitors', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->integer('type');
            $table->string('url')->nullable();
            $table->integer('interval');
            $table->integer('expected_status_code')->nullable();
            $table->integer('notification_type');
            $table->string('email_internal')->nullable();
            $table->string('password_internal')->nullable();
            $table->string('email_external')->nullable();
            $table->string('password_external')->nullable();
            $table->string('email_forward')->nullable();
            $table->string('password_forward')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitors');
    }
};
