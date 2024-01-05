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
        Schema::create('contracttypes', function (Blueprint $table) {
            $table->id('contracttype_id');
            $table->string('contracttype_name');
            $table->tinyInteger('contracttype_dl')->default(0);
            $table->tinyInteger('active')->default(1);
            $table->integer('user_id')->default(0);;
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracttypes');
    }
};
