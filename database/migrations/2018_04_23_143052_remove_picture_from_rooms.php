<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemovePictureFromRooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('rooms',function (Blueprint $table){

            $table->dropColumn(['picture','picture_path']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('rooms',function (Blueprint $table){

            $table->string('picture')->default('noRoomPicture.png');

            $table->string('picturePath')->default('/images/rooms');

        });
    }
}
