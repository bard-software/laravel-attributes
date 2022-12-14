<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('laravel_attribute_values_table', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->foreignId("attribute_id");
            $table->json("extra");
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('laravel_attribute_values_table');
    }

};
