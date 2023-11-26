<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblNeracaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_neraca', function (Blueprint $table) {
            $table->bigIncrements('id'); // Use bigIncrements instead of id
            $table->bigInteger('id_user')->unsigned()->nullable();
            $table->decimal('aset', 15, 2)->nullable();
            $table->decimal('kewajiban', 15, 2)->nullable();
            $table->decimal('ekuitas', 15, 2)->nullable();
            $table->year('bulan')->nullable();
            $table->timestamps();;

            // $table->foreign('id_user')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_neraca');
    }
}
