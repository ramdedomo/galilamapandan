<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJOctoberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('j_october', function (Blueprint $table) {
            $table->integer('oct_event_id', true);
            $table->string('oct_event_title', 50)->nullable();
            $table->text('oct_event_description')->nullable();
            $table->date('oct_event_date')->nullable();
            $table->integer('year_id')->nullable()->index('FK_october_activitiesprogram_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('j_october');
    }
}
