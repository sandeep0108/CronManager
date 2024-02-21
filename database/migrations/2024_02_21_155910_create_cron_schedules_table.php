<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cron_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('command_name')->comment('The command name which is being running');
            $table->string('description')->comment('Description of command');
            $table->string('schedule')->comment('Command schedule when it will be run');
            $table->timestamp('start_time')->nullable()->comment('Command start time');
            $table->timestamp('end_time')->nullable()->comment('Command end time');
            $table->integer('duration_seconds')->nullable()->comment('How much command took running time');
            $table->enum('status', [0, 1, 2])->default(1)
                ->comment('0 - Inactive, 1 - Cron is Active, 2 - Cron is Running');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cron_schedules');
    }
};
