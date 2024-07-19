<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_houses', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('client_id')->nullable();
            // $table->foreignId('reservation_id')->nullable();
            $table->foreignId('broker_id')->nullable();
            $table->string('model');
            $table->integer('blk_no');
            $table->integer('lot_no');
            $table->integer('lot_area');
            $table->integer('floor_area');
            $table->string('title_no')->nullable();
            // $table->decimal('package_price', 15, 2)->nullable();
            $table->decimal('processing_fee', 15, 2)->nullable();
            $table->decimal('corner_lot_fee', 15, 2)->nullable();
            $table->decimal('commercial_lot_fee', 15, 2)->nullable();
            $table->decimal('discount', 15, 2)->nullable();
            $table->decimal('total_contract_price', 15, 2)->nullable();
            $table->integer('downpayment')->nullable();
            $table->date('upholding_date');
            $table->integer('downpayment_term')->nullable();
            $table->decimal('downpayment_total', 15, 2)->nullable();
            $table->integer('balance_term')->nullable();
            $table->decimal('balance_total', 15, 2)->nullable();
            // $table->decimal('total_balance', 15, 2)->nullable();
            $table->tinyInteger('status')->nullable()->default(3);
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
        Schema::dropIfExists('in_houses');
    }
}
