<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('client_id')->nullable();
            $table->bigInteger('broker_id')->nullable();
            $table->bigInteger('hdmf_loan_property_id')->nullable();
            $table->bigInteger('in_house_property_id')->nullable();
            $table->bigInteger('hdmf_loan_payment_schedules_id')->nullable();
            $table->bigInteger('in_house_payment_schedules_id')->nullable();
            $table->integer('notification_type');
            $table->timestamps();
            $table->tinyInteger('viewed')->default(0);
            $table->timestamp('viewed_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('notifications');
    }
}
