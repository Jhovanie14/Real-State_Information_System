<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonRelativeCharacterReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('non_relative_character_references', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('client_id')->nullable();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('contact_no')->nullable();
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->timestamps();
            $table->tinyInteger('active')->default(1);

            // $table->foreignId('client_id')->references('id')->on('clients')->onDelete('set null');
            // $table->foreignId('updated_by')->references('emp_id')->on('employees')->onDelete('set null');
            // $table->foreignId('created_by')->references('emp_id')->on('employees')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('non_relative_character_references');
    }
}
