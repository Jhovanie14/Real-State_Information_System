<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrokersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brokers', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('name');
            $table->string('address');
            $table->string('prc_license')->nullable();
            $table->string('tin_no')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->string('brokerage_firm')->nullable();
            $table->string('brokerage_address')->nullable();
            $table->string('brokerage_tin_no')->nullable();
            $table->string('brokerage_contact_no')->nullable();
            $table->string('brokerage_email')->nullable();
            $table->foreignId('created_by');
            $table->foreignId('updated_by');
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
        Schema::dropIfExists('brokers');
    }
}
