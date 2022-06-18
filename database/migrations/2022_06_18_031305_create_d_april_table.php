<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDAprilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_april', function (Blueprint $table) {
            $table->integer('apr_event_id', true);
            $table->string('apr_event_title', 50)->nullable();
            $table->text('apr_event_description')->nullable();
            $table->date('apr_event_date')->nullable();
            $table->integer('year_id')->nullable()->index('FK_april_activitiesprogram_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('d_april');
    }
}
