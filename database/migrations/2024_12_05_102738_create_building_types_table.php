<?php

// database/migrations/xxxx_xx_xx_create_building_types_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingTypesTable extends Migration
{
    public function up()
    {
        Schema::create('building_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('building_types');
    }
}

