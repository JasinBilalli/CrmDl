<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCostumerStatusGrundversicherung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumer_status_grundversicherung',function (Blueprint $table){
            $table->id();
            $table->integer('person_idG')->nullable();
            $table->string('societyG')->nullable();
            $table->integer('kvg_premiumG')->nullable();
            $table->string('statusG')->nullable();
            $table->date('modification_dateG')->nullable();
            $table->string('provisionG')->nullable();
            $table->string('cidG')->nullable();
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
        Schema::dropIfExists('costumer_status_grundversicherung');
    }
}
