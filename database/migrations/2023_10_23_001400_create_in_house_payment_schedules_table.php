<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInHousePaymentSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_house_payment_schedules', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('client_id')->nullable();
            $table->foreignId('in_house_property_id')->nullable();
            $table->string('payment_for');
            $table->decimal('payment_remaining', 15, 2);
            $table->decimal('payment_amount', 15, 2);
            $table->date('payment_date')->nullable();
            $table->decimal('total_balance', 15, 2);
            $table->tinyInteger('paid')->default(0);
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->timestamps();
            $table->tinyInteger('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('in_house_payment_schedules');
    }
}
