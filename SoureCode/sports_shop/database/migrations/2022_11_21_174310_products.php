<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('image', 200);
            $table->float('price', 10,3);
            $table->float('sale_price', 10,3);
            $table->text('short_content');
            $table->text('long_content');
            $table->tinyInteger('status')->default(0);
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();      
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
