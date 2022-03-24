<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couriers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tracking_no');
            $table->string('sender_contact');
            $table->string('sender_address');
            $table->string('sender_city');
            $table->string('sender_state');
            $table->string('sender_pin');
            $table->string('sender_country');
            $table->string('recipient_name');
            $table->string('recepient_contact');
            $table->string('recepient_address');
            $table->string('recipient_city');
            $table->string('recipient_state');
            $table->string('recepient_pin');
            $table->string('recepient_country');
            $table->text('courier_desc');
            $table->float('weight');
            $table->float('length');
            $table->float('breadth');
            $table->float('height');
            $table->string('from_location');
            $table->string('to_location');
            $table->string('status');
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
        Schema::dropIfExists('couriers');
    }
};
