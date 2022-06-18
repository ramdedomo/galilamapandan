<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToHAugustTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('h_august', function (Blueprint $table) {
            $table->foreign(['year_id'], 'FK_august_activitiesprogram_year')->references(['year_id'])->on('activitiesprogram_year')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('h_august', function (Blueprint $table) {
            $table->dropForeign('FK_august_activitiesprogram_year');
        });
    }
}
