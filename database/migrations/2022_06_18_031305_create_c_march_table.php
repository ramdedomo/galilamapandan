<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCMarchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_march', function (Blueprint $table) {
            $table->integer('mar_event_id', true);
            $table->string('mar_event_title', 50)->nullable();
            $table->text('mar_event_description')->nullable();
            $table->date('mar_event_date')->nullable();
            $table->integer('year_id')->nullable()->index('FK_march_activitiesprogram_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_march');
    }
}
