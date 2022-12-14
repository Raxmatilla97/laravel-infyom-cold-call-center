<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQongiroqQilganlarsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qongiroq_qilganlars', function (Blueprint $table) {
            $table->id('id');
            $table->string('familya');
            $table->string('ism');
            $table->string('sharif');
            $table->date('tugulgan_kun');
            $table->double('telefon_nomer');
            $table->double('parent_telefon');
            $table->string('manzil');
            $table->boolean('qayta_tell_qilindimi')->nullable();
            $table->date('qayta_tell_qilingan_sana')->nullable();
            $table->unsignedBigInteger('oquv_yonalishi')->nullable();
            $table->boolean('keldimi')->nullable();
            $table->text('qoshimcha_desc');
            $table->string('recall')->nullable();
            $table->date('oquvchi_keladigan_kun');
            $table->foreign('oquv_yonalishi')
              ->references('id')->on('categories')->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('qongiroq_qilganlars');
    }
}
