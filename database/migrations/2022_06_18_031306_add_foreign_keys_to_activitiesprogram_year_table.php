<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToActivitiesprogramYearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activitiesprogram_year', function (Blueprint $table) {
            $table->foreign(['activitiesprograms_id'], 'FK_activitiesprogram_year_activityprograms')->references(['activitiesprograms_id'])->on('activityprograms')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activitiesprogram_year', function (Blueprint $table) {
            $table->dropForeign('FK_activitiesprogram_year_activityprograms');
        });
    }
}
