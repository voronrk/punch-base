<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePunchPicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punch_pics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('punch');
            $table->string('value');

            $table->foreign('punch')->references('id')->on('punches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('punch_pics');
    }
}
