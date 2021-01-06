<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('menu_user')) {
         Schema::create('menu_user', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->unsignedBigInteger('user_id');
           $table->unsignedBigInteger('menu_id');
           $table->timestamps();

           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');

           $table->unique(['user_id', 'menu_id']);
         });
       }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_user');
    }
}
