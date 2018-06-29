<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesDetailsTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes_details', function (Blueprint $table) {
            $table->bigIncrements('id');	
            $table->bigInteger('idRecipe')->unsigned();
            $table->bigInteger('idFood')->unsigned();
            $table->decimal('quantity', 8, 2);
            $table->timestamps();

            $table->index('idRecipe');
            $table->index('idFood');

              $table->foreign('idRecipe')
                  ->references('idRecipe')->on('recipes')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

             $table->foreign('idFood')
                  ->references('idFood')->on('foods')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes_details');
    }
}
