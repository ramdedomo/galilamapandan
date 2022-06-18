<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKNovemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k_november', function (Blueprint $table) {
            $table->integer('nov_event_id', true);
            $table->string('nov_event_title', 50)->nullable();
            $table->text('nov_event_description')->nullable();
            $table->date('nov_event_date')->nullable();
            $table->integer('year_id')->nullable()->index('FK_november_activitiesprogram_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('k_november');
    }
}
