<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCostumerStatusHausrat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumer_status_hausrat',function (Blueprint $table){
            $table->id();
            $table->integer('person_idH')->nullable();
            $table->string('societyH')->nullable();
            $table->integer('kvg_premiumH')->nullable();
            $table->string('statusH')->nullable();
            $table->date('modification_dateH')->nullable();
            $table->string('provisionH')->nullable();
            $table->string('cidH')->nullable();
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
        Schema::dropIfExists('costumer_status_hausrat');
    }
}
