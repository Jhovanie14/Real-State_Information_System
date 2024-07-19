<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInHousePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_house_properties', function (Blueprint $table) {
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
            $table->integer('downpayment_term')->nullable();
            $table->decimal('downpayment_monthly', 15, 2)->nullable();
            $table->date('downpayment_start');
            $table->date('downpayment_end');
            $table->decimal('downpayment_total', 15, 2)->nullable();
            $table->integer('balance_term')->nullable();
            $table->decimal('balance_monthly', 15, 2)->nullable();
            $table->decimal('balance_total', 15, 2)->nullable();
            $table->date('balance_start');
            $table->date('balance_end');
            $table->decimal('remaining_balance', 15, 2)->nullable();

            // Statuses
            // When reservation is finished
            // 4 Downpayment Scheme
            // 3 Balance Scheme
            // 2 Fully Paid
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
        Schema::dropIfExists('in_house_properties');
    }
}
