<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employments', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('client_id')->nullable();
            $table->string('occupation')->nullable();            
            $table->string('position')->nullable();
            $table->string('length_of_employment')->nullable();
            $table->string('employer_name')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('employer_business_address')->nullable();
            $table->string('employer_email')->nullable();
            $table->string('monthly_gross_pay')->nullable();
            $table->string('other_income')->nullable();
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->timestamps();
            $table->tinyInteger('active')->default(1);

            // $table->foreignId('client_id')->references('id')->on('clients')->onDelete('set null');
            // $table->foreignId('created_by')->references('emp_id')->on('employees')->onDelete('set null');
            // $table->foreignId('updated_by')->references('emp_id')->on('employees')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employments');
    }
}
