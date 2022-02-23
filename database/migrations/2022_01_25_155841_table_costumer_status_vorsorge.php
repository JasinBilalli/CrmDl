<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCostumerStatusVorsorge extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumer_status_vorsorge',function (Blueprint $table){
            $table->id();
            $table->integer('person_idV')->nullable();
            $table->string('societyV')->nullable();
            $table->integer('productionV')->nullable();
            $table->string('statusV')->nullable();
            $table->date('modification_dateV')->nullable();
            $table->string('provisionV')->nullable();
            $table->string('cidV')->nullable();
            $table->integer('selected')->default(0);
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
        Schema::dropIfExists('costumer_status_vorsorge');
    }
}
