<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToJOctoberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('j_october', function (Blueprint $table) {
            $table->foreign(['year_id'], 'FK_october_activitiesprogram_year')->references(['year_id'])->on('activitiesprogram_year')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('j_october', function (Blueprint $table) {
            $table->dropForeign('FK_october_activitiesprogram_year');
        });
    }
}
