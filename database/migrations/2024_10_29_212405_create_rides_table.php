<?php

// database/migrations/create_rides_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRidesTable extends Migration
{
    public function up()
    {
        Schema::create('rides', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('driver_id')->constrained('drivers');
            $table->string('pickup_point');
            $table->string('dropoff_point');
            $table->integer('passengers');
            $table->enum('status', ['requested', 'accepted', 'declined', 'completed', 'canceled'])->default('requested');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rides');
    }
};