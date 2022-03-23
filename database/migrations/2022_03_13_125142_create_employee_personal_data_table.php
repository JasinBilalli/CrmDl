<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeePersonalDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_personal_data', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('prename')->nullable();
            $table->text('email')->unique();
            $table->text('address')->nullable();
            $table->text('zip')->nullable();
            $table->text('city');
            $table->text('phone')->nullable();
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
        Schema::dropIfExists('employee_personal_data');
    }
}
