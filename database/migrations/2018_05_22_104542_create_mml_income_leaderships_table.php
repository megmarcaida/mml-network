<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMmlIncomeLeadershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mml_income_leaderships', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->string('accountid');
            $table->string('incomeFrom');
            $table->integer('lvl');
            $table->dateTime('dateentry');
            $table->decimal('amount', 5, 2);
            $table->boolean('isPending');
            $table->boolean('status');
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
        Schema::dropIfExists('mml_income_leaderships');
    }
}
