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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('name');
            $table->date('purchase_date');
            $table->string('purchase_from');
            $table->string('manufacturer')->nullable();
            $table->string('model')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('supplier');
            $table->string('condition')->nullable();
            $table->integer('warranty')->nullable();
            $table->string('value');
            $table->text('description')->nullable();
            $table->string('status')->default('approved');
            $table->bigInteger('created_by')->unsigned()->nullable()->default(NULL);
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
