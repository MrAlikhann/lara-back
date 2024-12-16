<?php

// database/migrations/xxxx_xx_xx_create_moderator_objects_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeratorObjectsTable extends Migration
{
    public function up()
    {
        Schema::create('moderator_objects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->constrained()->cascadeOnDelete();
            $table->foreignId('city_id')->constrained()->cascadeOnDelete();
            $table->foreignId('building_type_id')->constrained('building_types')->cascadeOnDelete();
            $table->foreignId('street_id')->constrained()->cascadeOnDelete();
            $table->string('house');
            $table->string('corpus')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->enum('status', ['on_moderation', 'published'])->default('on_moderation');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('moderator_objects');
    }
}

