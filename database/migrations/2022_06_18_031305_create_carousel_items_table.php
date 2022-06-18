<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarouselItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carousel_items', function (Blueprint $table) {
            $table->integer('carousel_item_id', true);
            $table->string('carousel_item_header', 50)->nullable();
            $table->text('carousel_item_desc')->nullable();
            $table->integer('carousel_item_design')->nullable();
            $table->binary('carousel_item_bg')->nullable();
            $table->integer('carousel_item_active')->nullable();
            $table->string('carousel_item_button_name', 50)->nullable();
            $table->text('carousel_item_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carousel_items');
    }
}
