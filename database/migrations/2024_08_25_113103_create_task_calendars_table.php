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
        Schema::create('task_calendars', function (Blueprint $table) {
            $table->id();
            $table->integer('tcal_client_id');
            $table->text('tcal_title');
            $table->integer('tcal_event_id');
            $table->integer('tcal_link');
            $table->integer('tcal_date');
            $table->string('tcal_status')->default('N');
            $table->integer('tcal_created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_calendars');
    }
};
