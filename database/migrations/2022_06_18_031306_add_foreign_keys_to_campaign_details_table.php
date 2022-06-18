<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCampaignDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('campaign_details', function (Blueprint $table) {
            $table->foreign(['campaign_id'], 'FK_campaign_details_advocacy_campaigns')->references(['campaign_id'])->on('advocacy_campaigns')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('campaign_details', function (Blueprint $table) {
            $table->dropForeign('FK_campaign_details_advocacy_campaigns');
        });
    }
}
