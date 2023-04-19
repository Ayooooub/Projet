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
           
          
                    Schema::create('favorite_houses', function (Blueprint $table) {
                        $table->id();
                        $table->unsignedBigInteger('user_id');
                        $table->unsignedBigInteger('unit_id');
                        $table->string('unit_type');
                        $table->timestamps();
                    
                        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                        $table->index(['unit_id', 'unit_type']);
                    });
         
                
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorite_houses');
    }
};
