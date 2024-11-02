<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number')->unique();
            $table->string('pin');
            $table->string('gender');
            $table->string('email')->unique();
            $table->unsignedBigInteger('county_id'); // Change to county_id
            $table->unsignedBigInteger('sub_county_id'); // Change to sub_county_id
            $table->enum('status', ['Online', 'Offline'])->default('Offline');
            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('county_id')->references('id')->on('counties')->onDelete('cascade');
            $table->foreign('sub_county_id')->references('id')->on('sub_counties')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
