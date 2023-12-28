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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_id')->unsigned()->nullable()->default(NULL);
            $table->bigInteger('leave_type_id')->unsigned()->nullable()->default(NULL);
            $table->date('from');
            $table->date('to');
            $table->text('reason');
            $table->string('status')->default('Approved');
            $table->tinyInteger('delete_status')->default(0)->comment('0 => ok, 1 => Deleted');
            $table->timestamp('deleted_at')->nullable();
            $table->bigInteger('created_by')->unsigned()->nullable()->default(NULL); //it can be any super role such as hr
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();

            // Foreign key relationships
            $table->foreign('employee_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('leave_type_id')->references('id')->on('leave_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
