<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNuekommentar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addanother_thing_n', function (Blueprint $table) {
            $table->string('nuekommentar')->nullable();
        });
        Schema::table('lead_data_fahrzeug', function (Blueprint $table) {
            $table->string('nuekommentar')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addanother_thing_n', function (Blueprint $table) {
            $table->dropColumn('nuekommentar');
        });
    }
}
