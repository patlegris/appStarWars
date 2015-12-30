<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_tag', function (Blueprint $table) {
            $table->unsignedInteger('tag_id')->unsigned();
            $table->unsignedInteger('product_id')->unsigned();
            $table->unique(array('product_id', 'tag_id'));  // 1 2
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('CASCADE');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_tag');
    }
}