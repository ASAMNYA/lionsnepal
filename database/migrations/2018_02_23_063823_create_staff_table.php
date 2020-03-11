<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
             $table->text('image');
             $table->text('first_name');
            $table->text('last_name');
            $table->text('middle_name');
            $table->text('per_state');
            $table->text('per_municipality');
            $table->text('per_ward_no');
            $table->text('per_address'); 
            $table->text('temp_state');   
            $table->text('temp_municipality');
            $table->text('temp_ward_no');
            $table->text('temp_address');
            $table->text('email');
            $table->text('faculty');
            $table->text('dob');
            $table->text('sex');
            $table->text('mobile');
            $table->text('phone');
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
        Schema::dropIfExists('staff');
    }
}
