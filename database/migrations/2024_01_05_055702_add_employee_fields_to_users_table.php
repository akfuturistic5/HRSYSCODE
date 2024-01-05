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
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name',50)->nullable();
            $table->string('last_name',50)->nullable();
            $table->string('username',50)->nullable();
            $table->string('employee_id',50)->nullable();
            $table->date('joining_date')->nullable();
            $table->date('leaving_date')->nullable();
            $table->enum('gender', ['m', 'f', 'o'])->nullable();
            $table->string('passport_number',100)->nullable();
            $table->date('passport_expire_at')->nullable();
            $table->string('telephone_number',20)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('contact_number',20)->nullable();
            $table->string('nationality',40)->nullable();
            $table->string('religion',100)->nullable();
            $table->boolean('marital_status')->nullable();
            $table->string('employment_of_spouse')->nullable();
            $table->integer('no_of_child')->nullable();

            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies');

            $table->timestamp('deleted_at')->nullable()->default(null);


            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')->references('id')->on('departments');
            $table->unsignedBigInteger('designation_id')->nullable();
            $table->foreign('designation_id')->references('id')->on('designations');

            $table->string('address',200)->nullable();

            $table->unsignedBigInteger('state_id')->nullable();
            $table->foreign('state_id')->references('id')->on('states');

            $table->string('pincode',10)->nullable();

            $table->text('avatar')->nullable();

            $table->json('reports_to')->nullable()->default(null);

            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('users');

            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->foreign('deleted_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('username');
            $table->dropColumn('employee_id');
            $table->dropColumn('joining_date');
            $table->dropColumn('leaving_date');
            $table->dropColumn('gender');
            $table->dropColumn('passport_number');
            $table->dropColumn('passport_expire_at');
            $table->dropColumn('contact_number');
            $table->dropColumn('nationality');
            $table->dropColumn('religion');
            $table->dropColumn('marital_status');
            $table->dropColumn('employment_of_spouse');
            $table->dropColumn('no_of_child');
            $table->dropColumn('created_by');
            $table->dropColumn('updated_by');

        });
    }
};
