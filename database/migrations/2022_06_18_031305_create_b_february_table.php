<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBFebruaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_february', function (Blueprint $table) {
            $table->integer('feb_event_id', true);
            $table->string('feb_event_title', 50)->nullable();
            $table->text('feb_event_description')->nullable();
            $table->date('feb_event_date')->nullable();
            $table->integer('year_id')->nullable()->index('FK_february_activitiesprogram_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('b_february');
    }
}
