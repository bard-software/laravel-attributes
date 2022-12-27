<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('laravel_value_entities_table', function (Blueprint $table) {
            $table->id();
            $table->foreignId("value_id")->references('id')->on('laravel_attributes_table');
            $table->foreignId("entity_id")->references("id")->on("laravel_attribute_entities_table");
            $table->string("entity_type");
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('laravel_value_entities_table');
    }

};
