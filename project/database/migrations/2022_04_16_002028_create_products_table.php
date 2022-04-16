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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // الفئة التابع اليها المنتج
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('set null');
            
            // اسم المنتج
            $table->string('name');

            // وصف للمنتج
            $table->string('description')->nullable();

            // سعر المنتج
            $table->integer('price');

            // كمية المنتج
            $table->integer('quantity');
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
        Schema::dropIfExists('products');
    }
};
