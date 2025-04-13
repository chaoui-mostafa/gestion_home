<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    public function up()
    {
        // Drop the table if it exists to avoid duplicate table error
        Schema::dropIfExists('homes');

        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('image_home');
            $table->string('title_home');
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('categorie_id')->on('categories')->cascadeOnDelete();
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('type_id')->on('types')->cascadeOnDelete();
            $table->unsignedBigInteger('ville_id');
            $table->foreign('ville_id')->references('ville_id')->on('villes')->cascadeOnDelete();
            $table->decimal('price_home', 10, 2);
            $table->enum('reserve_home', ['reserved', 'not_reserved'])->default('not_reserved');
            $table->date('datereserve_home')->nullable();
            $table->timestamps();
            $table->index('categorie_id');
            $table->index('type_id');
            $table->index('ville_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('homes');
    }
}
