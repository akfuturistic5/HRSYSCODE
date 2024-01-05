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
        Schema::create('projects', function (Blueprint $table) {
            $table->id('project_id');
            $table->string('project_name');
            $table->string('client_id')->default(0);
            $table->date('deadline');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('rate')->nullable();
            $table->string('priority')->nullable();
            $table->integer('leader')->default(0);
            $table->string('teams')->nullable();
            $table->string('description')->nullable();
            $table->string('progress')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('project_dl')->default(0);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('projects');
    }
};
