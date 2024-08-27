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
        Schema::create('festivales', function (Blueprint $table) {
            $table->id();
            $table->string('event_id');
            $table->text('fest_name');
            $table->string('fest_status')->default('Y');
            $table->integer('fest_created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('festivales');
    }
};
