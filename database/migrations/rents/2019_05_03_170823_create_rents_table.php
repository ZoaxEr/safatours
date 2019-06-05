<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('traceNumber');
            $table->string('renter_name');
            $table->string('renter_phone');
            $table->boolean('has_whatsapp')->default(0);
            $table->string('renter_mail');
            $table->string('renter_nation');
            $table->date('pick_up_date');
            $table->time('pick_up_time');
            $table->date('drop_off_date');
            $table->time('drop_off_time');
            $table->string('pick_up_location');
            $table->string('drop_off_location');
            $table->boolean('has_driver')->default(0);
            $table->integer('driver_id')->unsigned();
            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->text('renter_notes')->nullable();
            $table->string('car_amount');
            $table->string('paid_amount')->nullable();
            $table->string('remaining_amount')->nullable();
            $table->string('insurance_amount')->nullable();
            $table->string('HGS_amount')->nullable();
            $table->boolean('confirmed')->default(0);
            $table->boolean('cancelled')->default(0);
            $table->boolean('reviewed')->default(0);
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
        Schema::dropIfExists('rents');
    }
}
