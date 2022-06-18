<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHAugustTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_august', function (Blueprint $table) {
            $table->integer('aug_event_id', true);
            $table->string('aug_event_title', 50)->nullable();
            $table->text('aug_event_description')->nullable();
            $table->date('aug_event_date')->nullable();
            $table->integer('year_id')->nullable()->index('FK_august_activitiesprogram_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_august');
    }
}
