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
        Schema::create('pulse', function (Blueprint $table) {
            $table->id();
            $table->boolean('up');
            $table->integer('response_time')->nullable();
            $table->string('email_in_status')->nullable();
            $table->string('email_out_status')->nullable();
            $table->string('email_smtp_relay_status')->nullable();
            $table->string('email_forward_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pulse');
    }
};
