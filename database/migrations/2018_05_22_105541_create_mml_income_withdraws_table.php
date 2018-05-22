<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMmlIncomeWithdrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mml_income_withdraws', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('userId');
          $table->decimal('withdrawAmount', 5, 2);
          $table->string('remarks');
          $table->dateTime('dateentry');
          $table->boolean('isCredit');
          $table->boolean('isDebit');
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
        Schema::dropIfExists('mml_income_withdraws');
    }
}
