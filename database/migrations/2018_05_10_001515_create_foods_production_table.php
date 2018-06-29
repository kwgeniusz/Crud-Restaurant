<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsProductionTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods_production', function (Blueprint $table) {
            $table->bigIncrements('idProduction');	
            $table->bigInteger('idFood')->unsigned();
            $table->decimal('quantityProduction', 8, 2);
            $table->timestamps();

            $table->unique('idFood');
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
        Schema::dropIfExists('foods_production');
    }
}
