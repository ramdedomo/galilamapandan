<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_members', function (Blueprint $table) {
            $table->integer('member_id', true);
            $table->string('member_name', 50)->default('');
            $table->string('member_position', 50)->default('');
            $table->integer('about_id')->nullable()->index('FK_about_members_about');
            $table->binary('display_picture')->nullable();
            $table->integer('member_order')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_members');
    }
}
