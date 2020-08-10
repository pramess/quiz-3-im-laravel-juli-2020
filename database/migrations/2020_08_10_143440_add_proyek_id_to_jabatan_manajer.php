<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProyekIdToJabatanManajer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jabatan_manajer', function (Blueprint $table) {
            //
              $table->unsignedBigInteger('proyek_id')->nullable();

            $table->foreign('proyek_id')->references('id')->on('proyek');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jabatan_manajer', function (Blueprint $table) {
            //
             $table->dropForeign(['proyek_id']);
            $table->dropColumn(['proyek_id']);
        });
    }
}
