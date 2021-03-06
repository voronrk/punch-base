<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePunchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punches', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('ordernum');
            $table->string('year');
            $table->float('size_length', 4, 2)->unsigned();
            $table->float('size_width', 4, 2)->unsigned();
            $table->float('size_height', 4, 2)->unsigned();
            $table->float('knife_size_length', 4, 2)->unsigned();
            $table->float('knife_size_width', 4, 2)->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('punches');
    }
}
