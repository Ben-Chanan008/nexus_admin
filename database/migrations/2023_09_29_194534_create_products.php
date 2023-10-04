<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up():void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->foreignId('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->string('product_name');
            $table->string('about');
            $table->string('body');
            $table->string('review');
            $table->string('rating');
            $table->string('images');
            $table->decimal('price', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down():void
    {
        Schema::dropIfExists('products');
    }
};