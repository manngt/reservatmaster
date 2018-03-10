<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name');

            $table->string('lastName');

            $table->double('phone')->default(0);

            $table->string('address')->default('ciudad');

            $table->date('birthday')->default('1000-01-01');

            $table->string('title')->nullable();

            $table->string('position')->nullable();

            $table->string('picture')->default('/noUserPicture.png');

            $table->string('picturePath')->default('/images/users');

            $table->string('email')->unique();

            $table->string('password');

            $table->rememberToken();

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

        Schema::dropIfExists('users');

    }
}
