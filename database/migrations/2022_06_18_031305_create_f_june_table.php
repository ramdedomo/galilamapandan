<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFJuneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_june', function (Blueprint $table) {
            $table->integer('june_event_id', true);
            $table->string('june_event_title', 50)->nullable();
            $table->text('june_event_description')->nullable();
            $table->date('june_event_date')->nullable();
            $table->integer('year_id')->nullable()->index('FK_june_activitiesprogram_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('f_june');
    }
}
