<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrokerCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('broker_commissions', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->bigInteger('broker_id');
            $table->integer('percent');
            $table->uuid('property_uuid');
            $table->decimal('commission', 8, 2);
            $table->timestamps();
            $table->tinyInteger('released')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('broker_commissions');
    }
}
