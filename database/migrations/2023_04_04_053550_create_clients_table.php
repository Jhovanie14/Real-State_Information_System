<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            // $table->foreignId('broker_id')->nullable();
            $table->foreignId('agent_id')->nullable();
            $table->string('image')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('suffix')->nullable();
            $table->string('present_address')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('pagibig_no')->nullable();
            $table->string('sss_no')->nullable();
            $table->string('gsis_no')->nullable();
            $table->string('tin_no')->nullable();
            $table->string('passport_no')->nullable();
            $table->date('passport_validity')->nullable();
            $table->date('passport_expiration_date')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('messenger')->nullable();
            $table->string('viber')->nullable();
            $table->string('other_social')->nullable();
            $table->string('residence_status')->nullable();
            $table->string('monthly_rental')->nullable();
            $table->string('years_of_stay')->nullable();
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->timestamps();
            $table->tinyInteger('active')->default(2);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
