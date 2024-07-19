<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spouses', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('client_id')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('suffix')->nullable();
            $table->string('occupation')->nullable();
            $table->string('department')->nullable();
            $table->string('length_of_employment')->nullable();
            $table->string('employer_name')->nullable();
            $table->string('employer_contact_no')->nullable();
            $table->string('employer_business_address')->nullable();
            $table->string('employer_email')->nullable();
            $table->string('gross_pay')->nullable();
            $table->string('other_income')->nullable();
            $table->string('tin_no')->nullable();
            $table->string('hdmf_no')->nullable();
            $table->string('sss_no')->nullable();
            $table->string('gsis_no')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('facebook')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->timestamps();
            $table->tinyInteger('active')->default(1);

            // $table->foreignId('client_id')->references('id')->on('clients')->onDelete('set null');
            // $table->foreignId('updated_by')->references('emp_id')->on('employees')->onDelete('set null');
            // $table->foreignId('created_by')->references('emp_id')->on('employees')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spouses');
    }
}
