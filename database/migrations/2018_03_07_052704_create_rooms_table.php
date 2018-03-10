<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {

            $table->integer('id')->unsigned();

            $table->primary('id');

            $table->integer('number');

            $table->integer('location_id')->unsigned();

            $table->foreign('location_id')

                ->references('id')

                ->on('locations')

                ->onDelete('restrict')

                ->onUpdate('cascade');

            $table->integer('level_id')->unsigned();

            $table->foreign('level_id')

                ->references('id')

                ->on('levels')

                ->onDelete('restrict')

                ->onUpdate('cascade');

            $table->integer('room_type_id')->unsigned();

            $table->foreign('room_type_id')

                ->references('id')

                ->on('room_types')

                ->onDelete('restrict')

                ->onUpdate('cascade');

            $table->decimal('cost',10,2);

            $table->decimal('price',10,2);

            $table->string('picture_path')->default('/images/rooms');

            $table->string('picture')->default('noRoomPicture.png');

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
        Schema::dropIfExists('rooms');
    }
}
