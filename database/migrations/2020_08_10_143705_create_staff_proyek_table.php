<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_proyek', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('staff_id')->nullable();

            $table->foreign('staff_id')->references('id')->on('jabatan_staff');

            $table->unsignedBigInteger('proyek_id')->nullable();

            $table->foreign('proyek_id')->references('id')->on('proyek');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_proyek');
    }
}
