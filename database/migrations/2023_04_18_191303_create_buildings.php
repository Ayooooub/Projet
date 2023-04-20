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
        Schema::create('buildings', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('adresse');
            $table->float('prix', 15, 2);
            $table->integer('surface');
            $table->integer('nb_etage');
            $table->string('type_annonce');
            $table->string('type')->default('Immeuble');
            $table->integer('annee_construction')->nullable();
            $table->boolean('ascenceur')->default(false);
            $table->boolean('balcon')->default(false);
            $table->boolean('garage')->default(false);
            $table->boolean('cave')->default(false);
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
        Schema::dropIfExists('buildings');
    }
};
