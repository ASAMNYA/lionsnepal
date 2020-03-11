<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrgLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orglevel_id');
            $table->text('title');
            $table->text('image');
            $table->integer('org_level_categories_id')->unsigned();
            $table->foreign('org_level_categories_id')->references('id')->on('org_level_cats');
            $table->text('position');
            $table->text('description')->nullable();
            $table->string('email')->default('unknown @gmail.com');
            $table->string('landline')->default('000000');
            $table->string('mobile')->default('00000000');
            $table->string('website')->default('unknown');
            $table->string('address')->default('unknown');
            $table->string('blood_group')->default('unknown blood_group');
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
        Schema::dropIfExists('org_levels');
    }
}
