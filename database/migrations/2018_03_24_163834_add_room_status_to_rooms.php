<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoomStatusToRooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('rooms', function (Blueprint $table) {

            $table->integer('room_status_id')->unsigned();

            $table->foreign('room_status_id')

                ->references('id')

                ->on('room_statuses')

                ->onDelete('restrict')

                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('rooms', function (Blueprint $table) {

            $table->dropColumn('room_status_id');

        });

    }
}
