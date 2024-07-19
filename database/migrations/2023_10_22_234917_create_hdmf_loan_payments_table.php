<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHdmfLoanPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hdmf_loan_payments', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('client_id')->nullable();
            $table->foreignId('hdmf_loan_property_id')->nullable();
            $table->string('payment_for')->nullable();
            $table->decimal('payment_amount', 15 ,2)->nullable();
            $table->date('payment_date')->nullable();
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
        Schema::dropIfExists('hdmf_loan_payments');
    }
}
