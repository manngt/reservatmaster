<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_pictures', function (Blueprint $table) {

            $table->integer('id')->unsigned();

            $table->primary('id');

            $table->integer('room_id')->unsigned();

            $table->foreign('room_id')

                ->references('id')

                ->on('rooms')

                ->onDelete('restrict')

                ->onUpdate('cascade');


            $table->string('picture')->default('noRoomPicture.png');

            $table->string('picturePath')->default('/images/rooms');

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
        Schema::dropIfExists('room_pictures');
    }
}
