<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitleSubtitleToBannerImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banner_images', function (Blueprint $table) {

            $table->string('title')->nullable();

            $table->string('subtitle')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banner_images', function (Blueprint $table) {

            $table->dropColumn('title');
            $table->dropColumn('subtitle');

        });
    }
}
