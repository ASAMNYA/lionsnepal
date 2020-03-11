<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreatePhotosTable extends Migration
    {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {

            Schema::create('photos' , function (Blueprint $table) {

                $table->increments('id');
                $table->string('title');
                $table->string('description');
                $table->text('image');
                $table->date('date_created');
                $table->integer('status');
                $table->text('size');
                $table->integer('album_id')->unsigned();
                $table->foreign('album_id')->references('id')->on('albums');
                $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users');
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

            Schema::dropIfExists('photos');
        }
    }
