<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductFullsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_fulls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->default(1);
            $table->string('name');
            $table->string('name_en');
            $table->string('code');
            $table->text('description1')->nullable();
            $table->text('description1_en')->nullable();
            $table->text('description2')->nullable();
            $table->text('description2_en')->nullable();
            $table->text('image')->nullable();
            $table->double('price')->default(0);
            $table->tinyInteger('amulet')->default(0);
            $table->tinyInteger('neww')->default(0);
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
        Schema::dropIfExists('product_fulls');
    }
}
