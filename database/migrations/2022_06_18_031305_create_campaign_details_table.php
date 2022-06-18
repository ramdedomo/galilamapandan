<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_details', function (Blueprint $table) {
            $table->integer('featured_id', true);
            $table->string('featured_name', 50)->nullable();
            $table->date('date_established')->nullable();
            $table->text('featured_desc')->nullable();
            $table->integer('campaign_id')->nullable()->index('FK_campaign_details_advocacy_campaigns');
            $table->integer('home_featured')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaign_details');
    }
}
