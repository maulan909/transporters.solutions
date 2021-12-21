<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('hero_image')->default('default-hero.jpg');
            $table->string('hero_title');
            $table->string('hero_subtitle')->nullable();
            $table->string('font_color')->default('#ffffff');
            $table->string('cta_button')->default('Get Started');
            $table->string('secondary_button')->nullable();
            $table->string('about_image')->nullable();
            $table->text('about_content');
            $table->string('service_image')->nullable();
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
        Schema::dropIfExists('homepages');
    }
}
