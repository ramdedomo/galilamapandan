<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLDecemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l_december', function (Blueprint $table) {
            $table->integer('dec_event_id', true);
            $table->string('dec_event_title', 50)->nullable();
            $table->text('dec_event_description')->nullable();
            $table->date('dec_event_date')->nullable();
            $table->integer('year_id')->nullable()->index('FK_december_activitiesprogram_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('l_december');
    }
}
