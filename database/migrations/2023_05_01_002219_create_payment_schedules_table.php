<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_schedules', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('client_id')->nullable();
            $table->foreignId('property_id')->nullable();
            $table->foreignId('reservation_id')->nullable();
            $table->string('contract');
            $table->string('payment_for');
            $table->decimal('payment_amount', 15, 2);
            $table->date('payment_date')->nullable();

            // $table->date('reservation_start_date')->nullable();
            // $table->date('reservation_end_date')->nullable();

            // $table->integer('downpayment_term')->nullable();
            // $table->decimal('downpayment_scheme_monthly_payment', 15, 2)->nullable();
            // $table->tinyInteger('downpayment_scheme_month_count');
            // $table->date('downpayment_scheme_start_payment')->nullable();
            // $table->date('downpayment_scheme_end_payment')->nullable();

            // $table->integer('balance_term')->nullable();
            // $table->decimal('balance_scheme_monthly_payment', 15, 2)->nullable();
            // $table->tinyInteger('balance_scheme_month_count');
            // $table->date('balance_scheme_start_payment')->nullable();
            // $table->date('balance_scheme_end_payment')->nullable();

            // $table->decimal('total_balance', 15, 2)->nullable();
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
        Schema::dropIfExists('payment_schedules');
    }
}
