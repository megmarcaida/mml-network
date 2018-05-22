<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMmlIncomeDirectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mml_income_directs', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('userid');
          $table->string('accountid');
          $table->integer('userEntryId');
          $table->string('accountEntryId');
          $table->boolean('isPair');
          $table->dateTime('dateentry');
          $table->decimal('amount', 5, 2);
          $table->boolean('isFree');
          $table->timestamps();
          $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mml_income_directs');
    }
}
