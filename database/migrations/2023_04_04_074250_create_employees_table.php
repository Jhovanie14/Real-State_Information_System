<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('emp_id');
            $table->uuid('emp_uuid');
            $table->foreignId('acc_id');
            $table->string('emp_email')->unique();
            $table->string('emp_password')->nullable();
            $table->string('emp_last_name')->nullable();
            $table->string('emp_first_name')->nullable();
            $table->string('emp_middle_name')->nullable();
            $table->string('emp_ext_name')->nullable();
            $table->date('emp_date_of_birth')->nullable();
            $table->string('emp_place_of_birth')->nullable();
            $table->string('emp_gender')->nullable();
            $table->string('emp_address')->nullable();
            $table->string('emp_mobile')->nullable();
            $table->string('emp_image')->nullable();
            $table->foreignId('pos_id')->nullable();
            $table->foreignId('emp_created_by')->nullable();
            $table->foreignId('emp_updated_by')->nullable();
            $table->timestamps();
            $table->tinyInteger('emp_active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
