<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddManajerIdToJabatanStaff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jabatan_staff', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('manajer_id')->nullable();

            $table->foreign('manajer_id')->references('id')->on('jabatan_manajer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jabatan_staff', function (Blueprint $table) {
            //
            $table->dropForeign(['manajer_id']);
            $table->dropColumn(['manajer_id']);
        });
    }
}
