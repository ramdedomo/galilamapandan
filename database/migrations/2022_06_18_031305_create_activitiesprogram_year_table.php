<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesprogramYearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activitiesprogram_year', function (Blueprint $table) {
            $table->integer('year_id', true);
            $table->integer('activitiesprograms_id')->nullable()->index('FK_activitiesprogram_year_activityprograms');
            $table->integer('home_featured')->nullable();
            $table->string('year', 50)->nullable();
            $table->text('year_desc')->nullable();
            $table->binary('display_picture')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activitiesprogram_year');
    }
}
