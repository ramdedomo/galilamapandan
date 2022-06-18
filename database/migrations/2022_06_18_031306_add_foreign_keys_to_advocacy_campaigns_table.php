<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAdvocacyCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('advocacy_campaigns', function (Blueprint $table) {
            $table->foreign(['advocacy_id'], 'FK_advocacy_campaigns_advocacy')->references(['advocacy_id'])->on('advocacy')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('advocacy_campaigns', function (Blueprint $table) {
            $table->dropForeign('FK_advocacy_campaigns_advocacy');
        });
    }
}
