<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCostumerStatusZusatzversicherung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumer_status_zusatzversicherung',function (Blueprint $table){
            $table->id();
            $table->integer('person_idZ')->nullable();
            $table->string('societyZ')->nullable();
            $table->integer('vvg_premiumZ')->nullable();
            $table->string('statusZ')->nullable();
            $table->date('modification_dateZ')->nullable();
            $table->string('provisionZ')->nullable();
            $table->string('cidZ')->nullable();
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
        Schema::dropIfExists('costumer_status_zusatzversicherung');
    }
}
