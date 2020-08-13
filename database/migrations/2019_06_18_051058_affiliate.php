<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Affiliate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('affiliate', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('full_name')->nullable();
            $table->string('password')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_acc_holder')->nullable();
            $table->string('bank_acc_number')->nullable();
            $table->string('affiliate_url')->nullable();
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
