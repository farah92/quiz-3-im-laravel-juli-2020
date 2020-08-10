<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('staff_id');
            $table->unsignedBigInteger('karyawan_id');
            $table->unsignedBigInteger('manager_id');
            $table->foreign('karyawan_id')->references('karyawan_id')->on('karyawan');
            $table->foreign('manager_id')->references('manager_id')->on('manager');
            $table->foreign('proyek_id')->references('proyek_id')->on('proyek');
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
        Schema::dropIfExists('staff');
    }
}
