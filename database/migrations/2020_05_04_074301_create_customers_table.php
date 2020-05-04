<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('order_id', 20);
            $table->string('cust_name', 50);
            $table->string('cust_lastname', 50);
            $table->string('cust_email', 255);
            $table->string('street_address1', 255);
            $table->string('street_address2', 255);
            $table->string('city', 100);
            $table->string('state', 100);
            $table->string('zip', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
