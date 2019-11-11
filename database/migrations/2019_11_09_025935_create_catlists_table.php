<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('color');
            $table->string('features');
            $table->string('status');
            $table->string('image');
            $table->bigInteger('good');
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
        Schema::dropIfExists('catlists');
    }
}
