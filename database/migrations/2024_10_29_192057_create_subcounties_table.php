<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCountiesTable extends Migration
{
    public function up()
    {
        Schema::create('sub_counties', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the sub-county
            $table->unsignedBigInteger('county_id'); // Foreign key to the counties table
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('county_id')->references('id')->on('counties')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_counties');
    }
}
