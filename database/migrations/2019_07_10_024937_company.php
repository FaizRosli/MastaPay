<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Company extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('company', function (blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('name')->nullable();
            $table->string('industry')->nullable();
            $table->string('registration_number')->nullable();
            $table->text('address')->nullable();
            $table->text('google_map')->nullable();

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
