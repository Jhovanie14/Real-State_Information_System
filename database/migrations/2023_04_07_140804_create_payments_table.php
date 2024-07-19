ay<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('client_id')->nullable();
            $table->foreignId('property_id')->nullable();
            $table->foreignId('in_house_id')->nullable();
            $table->foreignId('reservation_id')->nullable();

            $table->string('contract')->nullable();
            $table->decimal('payment_amount', 15 ,2)->nullable();
            $table->string('payment_for')->nullable();
            // $table->integer('downpayment_term')->nullable();
            // $table->string('downpayment_scheme_months_left')->nullable();
            // $table->decimal('downpayment_scheme_monthly_payment', 15, 2)->nullable();
            // $table->decimal('downpayment_scheme_balance', 15, 2)->nullable();
            // $table->string('downpayment_scheme_status')->nullable();
            // $table->integer('balance_term')->nullable();
            // $table->string('balance_scheme_months_left')->nullable();
            // $table->decimal('balance_scheme_monthly_payment', 15, 2)->nullable();
            // $table->decimal('balance_scheme_balance', 15, 2)->nullable();
            // $table->string('balance_scheme_status')->nullable();
            $table->decimal('total_balance', 15, 2)->nullable();
            $table->string('or')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
