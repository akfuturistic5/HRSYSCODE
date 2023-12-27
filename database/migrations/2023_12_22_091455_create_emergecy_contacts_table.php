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
        Schema::create('emergency_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',70);
            $table->string('last_name',70);
            $table->string('email',100);
            $table->string('contact_number',20);
            $table->date('birthday');
            $table->enum('gender', ['m', 'f', 'o']);

            $table->boolean('is_primary')->default(0);

            $table->unsignedBigInteger('address_id');
            $table->foreign('address_id')->references('id')->on('user_addresses')->onDelete('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergency_contacts');
    }
};
