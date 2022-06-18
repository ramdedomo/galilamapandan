<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGJulyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g_july', function (Blueprint $table) {
            $table->integer('july_event_id', true);
            $table->string('july_event_title', 50)->nullable();
            $table->text('july_event_description')->nullable();
            $table->date('july_event_date')->nullable();
            $table->integer('year_id')->nullable()->index('FK_july_activitiesprogram_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g_july');
    }
}
