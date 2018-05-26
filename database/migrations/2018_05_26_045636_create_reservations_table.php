<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {

            $table->integer('id')->unsigned();
            $table->primary('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')
                ->references('id')
                ->on('rooms')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->integer('reservation_status_id')->unsigned();
            $table->foreign('reservation_status_id')
                ->references('id')
                ->on('reservation_statuses')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->integer('reservation_source_id')->unsigned();
            $table->foreign('reservation_source_id')
                ->references('id')
                ->on('reservation_sources')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->integer('reservation_time_id')->unsigned();
            $table->foreign('reservation_time_id')
                ->references('id')
                ->on('reservation_times')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->date('start');

            $table->date('ends');

            $table->string('day');

            $table->softDeletes();
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
        Schema::dropIfExists('reservations');
    }
}
