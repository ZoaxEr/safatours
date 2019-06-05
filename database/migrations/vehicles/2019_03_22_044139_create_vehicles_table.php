<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('traceNumber');
            $table->string('mark');
            $table->string('model');
            $table->string('slug');
            $table->string('type');
            $table->string('PlateNumber');
            // $table->string('states_id');
            $table->string('GPSNumber')->nullable();
            $table->string('Thumbnail');
            $table->text('photos');
            $table->string('video')->nullable();
            $table->string('AdultMax');
            $table->string('ChildMax');
            $table->string('KilometresTravelled');
            $table->string('engine');
            $table->string('gearbox');
            $table->string('outlay');
            $table->string('earnings');
            $table->text('features');
            $table->enum('status', ['New', 'Used']);
            $table->enum('ownership', ['Owned', 'Rented']);
            $table->text('oldDamages')->nullable();
            $table->text('description')->nullable();
            $table->string('price');
            $table->boolean('hide');
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
        Schema::dropIfExists('vehicles');
    }
}
