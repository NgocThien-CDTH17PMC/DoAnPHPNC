<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichSuMuaCredit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lich_Su_Mua_Credit', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('nguoi_choi_id');
            $table->unsignedInteger('goi_credit_id');
            $table->integer('credit')->default(1000);
            $table->integer('so_tien')->default(10000);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoi_choi');
            $table->foreign('goi_credit_id')->references('id')->on('goi_credit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Lich_Su_Mua_Credit');
    }
}
