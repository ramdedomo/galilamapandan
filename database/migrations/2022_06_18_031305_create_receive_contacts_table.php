<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiveContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_contacts', function (Blueprint $table) {
            $table->integer('sender_id', true);
            $table->string('sender_name', 50)->nullable();
            $table->text('sender_message')->nullable();
            $table->string('sender_email', 50)->nullable();
            $table->dateTime('date_sended')->nullable();
            $table->integer('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receive_contacts');
    }
}
