<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_id')->unique();
            $table->string('product_name')->nullable();
            $table->string('product_price')->nullable();
            $table->string('product_detail')->nullable();
            $table->string('product_image')->nullable();
            $table->string('product_category')->nullable();
            $table->string('sku')->nullable();
            $table->string('weight')->nullable();
            $table->string('inventory')->nullable(); //---inventory whole product--//
            $table->string('price_stokist')->nullable();
            $table->string('moq_stokist')->nullable();
            $table->string('price_agent')->nullable();
            $table->string('moq_agent')->nullable();
            $table->string('commission_affiliate')->nullable();
            $table->string('commission_dropship')->nullable();
            $table->string('product_link')->nullable();
            $table->string('user_id');

            
                        
            
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
        //
    }
}
