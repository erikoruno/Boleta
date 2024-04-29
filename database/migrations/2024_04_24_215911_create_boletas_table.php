<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            $table->string('description');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

             $table->string('mes')->nullable();
             $table->string('año')->nullable();
            $table->string('descuentos');
            $table->string('subtotal');
            $table->string('total');
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
        Schema::dropIfExists('boletas');
    }
}
