<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableProductFulls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_fulls', function (Blueprint $table) {
            $table->text('image_banner')->nullable();
            $table->tinyInteger('menu')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_fulls', function (Blueprint $table) {
            $table->dropColumn('image_banner');
            $table->dropColumn('menu');
        });
    }
}
