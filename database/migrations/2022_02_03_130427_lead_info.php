<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LeadInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_info', function (Blueprint $table) {
            $table->id();
            $table->integer('lead_id');
            $table->string('krankenkasse');
            $table->string('teilnahme');
            $table->string('wichtig');
            $table->string('bewertung');
            $table->string('grund');
            $table->string('kampagne');
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
        Schema::dropIfExists('lead_info');
    }
}
