<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
          $table->id();
          $table->DateTime("date");
          $table->integer('msg');
          $table->integer('mark');
          $table->boolean('relay1');
          $table->boolean('relay2');
          $table->float('temp', 8, 2);
          $table->integer('light');
          $table->integer('sens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stats');
    }
};
