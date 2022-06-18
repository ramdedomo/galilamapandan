<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAJanuaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_january', function (Blueprint $table) {
            $table->integer('jan_event_id', true);
            $table->string('jan_event_title', 50)->nullable();
            $table->text('jan_event_description')->nullable();
            $table->date('jan_event_date')->nullable();
            $table->integer('year_id')->nullable()->index('FK_january_activitiesprogram_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('a_january');
    }
}
