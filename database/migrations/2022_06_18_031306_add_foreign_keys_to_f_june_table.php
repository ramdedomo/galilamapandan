<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFJuneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('f_june', function (Blueprint $table) {
            $table->foreign(['year_id'], 'FK_june_activitiesprogram_year')->references(['year_id'])->on('activitiesprogram_year')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('f_june', function (Blueprint $table) {
            $table->dropForeign('FK_june_activitiesprogram_year');
        });
    }
}
