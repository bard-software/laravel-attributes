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
            $table->foreignId("attribute_id")->references('id')->on('attributes');
            $table->foreignId("entity_id");
            $table->string("type");
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('laravel_attribute_values_table');
    }

};
