<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable('menus')) {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dish_name',50);
            $table->string('dish_img',100);
            //以下レシピ
            $table->string('material_1',50);
            $table->integer('amount_1');
            $table->string('unit_1',10);
            $table->string('material_2',50)->nullable($value = true);
            $table->integer('amount_2')->nullable($value = true);
            $table->string('unit_2',10)->nullable($value = true);
            $table->string('material_3',50)->nullable($value = true);
            $table->integer('amount_3')->nullable($value = true);
            $table->string('unit_3',10)->nullable($value = true);
            $table->string('material_4',50)->nullable($value = true);
            $table->integer('amount_4')->nullable($value = true);
            $table->string('unit_4',10)->nullable($value = true);
            $table->string('material_5',50)->nullable($value = true);
            $table->integer('amount_5')->nullable($value = true);
            $table->string('unit_5',10)->nullable($value = true);
            $table->string('material_6',50)->nullable($value = true);
            $table->integer('amount_6')->nullable($value = true);
            $table->string('unit_6',10)->nullable($value = true);
            $table->string('material_7',50)->nullable($value = true);
            $table->integer('amount_7')->nullable($value = true);
            $table->string('unit_7',10)->nullable($value = true);
            $table->string('material_8',50)->nullable($value = true);
            $table->integer('amount_8')->nullable($value = true);
            $table->string('unit_8',10)->nullable($value = true);
            $table->string('material_9',50)->nullable($value = true);
            $table->integer('amount_9')->nullable($value = true);
            $table->string('unit_9',10)->nullable($value = true);
            $table->string('material_10',50)->nullable($value = true);
            $table->integer('amount_10')->nullable($value = true);
            $table->string('unit_10',10)->nullable($value = true);
            $table->string('material_11',50)->nullable($value = true);
            $table->integer('amount_11')->nullable($value = true);
            $table->string('unit_11',10)->nullable($value = true);
            $table->string('material_12',50)->nullable($value = true);
            $table->integer('amount_12')->nullable($value = true);
            $table->string('unit_12',10)->nullable($value = true);
            $table->string('material_13',50)->nullable($value = true);
            $table->integer('amount_13')->nullable($value = true);
            $table->string('unit_13',10)->nullable($value = true);
            $table->string('material_14',50)->nullable($value = true);
            $table->integer('amount_14')->nullable($value = true);
            $table->string('unit_14',10)->nullable($value = true);
            $table->string('material_15',50)->nullable($value = true);
            $table->integer('amount_15')->nullable($value = true);
            $table->string('unit_15',10)->nullable($value = true);
            $table->timestamps();
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
        Schema::dropIfExists('menus');
    }
}
