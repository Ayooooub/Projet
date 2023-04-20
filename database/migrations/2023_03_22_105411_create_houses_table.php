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
        Schema::create('houses', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('adresse');
            $table->string('type');
            $table->float('prix', 15, 2);
            $table->integer('nbpiece');
            $table->integer('salle_bain');
            $table->string('type_annonce');
            $table->integer('surface');
            $table->integer('annee_construction')->nullable();
            $table->integer('nb_etage')->nullable();
            $table->integer('num_etage')->nullable();
            $table->boolean('meublé')->default(false);
            $table->boolean('balcon')->default(false);
            $table->boolean('garage')->default(false);
            $table->boolean('ascenceur')->default(false);
            $table->boolean('cuisine_equipee')->default(false);
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
        Schema::dropIfExists('houses');
    }
};
