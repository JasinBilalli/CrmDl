<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCostumerStatusRetchsschutz extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumer_status_retchsschutz',function (Blueprint $table){
            $table->id();
            $table->integer('person_idR')->nullable();
            $table->string('productR')->nullable();
            $table->string('durationR')->nullable();
            $table->string('statusR')->nullable();
            $table->date('modification_dateR')->nullable();
            $table->string('provisionR')->nullable();
            $table->string('cidR')->nullable();
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
        Schema::dropIfExists('costumer_status_retchsschutz');
    }
}
