<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {

            $table->integer('id')->unsigned();

            $table->primary('id');

            $table->integer('identity_document_type_id')->unsigned();

            $table->foreign('identity_document_type_id')

                ->references('id')

                ->on('identity_document_types')

                ->onDelete('restrict')

                ->onUpdate('cascade');

            $table->integer('identity_number');

            $table->string('country_id',10);

            $table->foreign('country_id')

                ->references('id')

                ->on('countries')

                ->onDelete('restrict')

                ->onUpdate('cascade');

            $table->string('first_name');

            $table->string('last_name');

            $table->string('phone')->nullable();

            $table->string('email')->nullable()->unique();

            $table->date('birthday')->nullable();

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
        Schema::dropIfExists('clients');
    }
}
