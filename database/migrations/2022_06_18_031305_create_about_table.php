<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->integer('about_id', true);
            $table->text('about_desc')->nullable();
            $table->string('contact_phone', 50)->nullable();
            $table->string('contact_email', 50)->nullable();
            $table->text('the_team_desc')->nullable();
            $table->text('contact_desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about');
    }
}
