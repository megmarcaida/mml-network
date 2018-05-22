<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMmlIncomePayoutHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mml_income_payout_histories', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('processBy');
          $table->dateTime('dateFrom');
          $table->dateTime('dateTo');
          $table->dateTime('dateProcessed');
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
        Schema::dropIfExists('mml_income_payout_histories');
    }
}
