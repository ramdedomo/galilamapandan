<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvocacyCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advocacy_campaigns', function (Blueprint $table) {
            $table->integer('campaign_id', true);
            $table->string('campaign_name', 50)->nullable();
            $table->text('campaign_desc')->nullable();
            $table->date('campaign_established')->nullable();
            $table->integer('advocacy_id')->nullable()->index('FK_advocacy_campaigns_advocacy');
            $table->integer('home_featured_camp')->nullable();
            $table->binary('display_picture')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advocacy_campaigns');
    }
}
