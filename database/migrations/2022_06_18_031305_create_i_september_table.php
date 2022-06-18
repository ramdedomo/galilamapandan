<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateISeptemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_september', function (Blueprint $table) {
            $table->integer('sept_event_id', true);
            $table->char('sept_event_title', 50)->nullable();
            $table->text('sept_event_description')->nullable();
            $table->date('sept_event_date')->nullable();
            $table->integer('year_id')->nullable()->index('FK_september_activitiesprogram_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('i_september');
    }
}
