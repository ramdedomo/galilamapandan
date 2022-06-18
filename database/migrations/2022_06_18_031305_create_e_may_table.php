<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEMayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_may', function (Blueprint $table) {
            $table->integer('may_event_id', true);
            $table->string('may_event_title', 50)->nullable();
            $table->text('may_event_description')->nullable();
            $table->date('may_event_date')->nullable();
            $table->integer('year_id')->nullable()->index('FK_may_activitiesprogram_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('e_may');
    }
}
