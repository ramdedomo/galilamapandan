<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAboutMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('about_members', function (Blueprint $table) {
            $table->foreign(['about_id'], 'FK_about_members_about')->references(['about_id'])->on('about')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about_members', function (Blueprint $table) {
            $table->dropForeign('FK_about_members_about');
        });
    }
}
