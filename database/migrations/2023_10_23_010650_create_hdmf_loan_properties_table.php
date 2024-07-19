<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHdmfLoanPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hdmf_loan_properties', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('client_id')->nullable();
            $table->foreignId('broker_id')->nullable();
            $table->string('model');
            $table->integer('blk_no');
            $table->integer('lot_no');
            $table->integer('lot_area');
            $table->integer('floor_area');
            $table->string('title_no')->nullable();
            $table->decimal('processing_fee', 15, 2)->nullable();
            $table->decimal('corner_lot_fee', 15, 2)->nullable();
            $table->decimal('commercial_lot_fee', 15, 2)->nullable();
            $table->decimal('discount', 15, 2)->nullable();
            $table->decimal('total_contract_price', 15, 2)->nullable();
            $table->decimal('reservation_fee', 15, 2)->nullable();
            $table->integer('equity_term')->nullable();
            $table->decimal('equity_monthly', 15, 2)->nullable();
            $table->date('equity_start');
            $table->date('equity_end');
            $table->decimal('equity_total', 15, 2)->nullable(); $table->date('downpayment_start');
            $table->decimal('loanable_amount', 15, 2)->nullable();
            $table->decimal('remaining_balance', 15, 2)->nullable();

            // HDMF Property Statuses
            // 4 Equity Scheme
            // 3 Taken Out & Fully Paid
            // 2 Taken Out with Equity Balance
            // 1 Reservation
            // 0 Cancelled
            // -1 Deleted
            $table->tinyInteger('status')->nullable()->default(1);

            // Reservation
            // 2 Finished
            // 1 Reserved
            // 0 Archived
            // -1 Deleted
            $table->tinyInteger('reservation')->nullable()->default(1);
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
        Schema::dropIfExists('hdmf_loan_properties');
    }
}
