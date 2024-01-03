<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('shifts', function (Blueprint $table) {
            $table->id('shift_id');
            $table->string('shift_name');
            $table->time('min_start_time');
            $table->time('start_time');
            $table->time('max_start_time');
            $table->time('min_end_time');
            $table->time('end_time');
            $table->time('max_end_time');
            $table->integer('break_time');
            $table->tinyInteger('recurring_shifts')->default(0);
            $table->tinyInteger('repeat')->default(0);
            $table->string('weekdays');
            $table->date('endon');
            $table->tinyInteger('indefinite')->default(0);
            $table->string('tags');
            $table->string('note');
            $table->tinyInteger('shift_dl')->default(0);
            $table->tinyInteger('active')->default(1);
            $table->integer('user_id')->default(0);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shifts');
    }
};
