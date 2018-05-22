<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMmlIncomePayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mml_income_payouts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->decimal('encashedAmount', 5, 2);
            $table->string('enchashmentMode');
            $table->integer('batchId');
            $table->dateTime('dateentry');
            $table->boolean('isRelease');
            $table->boolean('isClaimed');
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
        Schema::dropIfExists('mml_income_payouts');
    }
}
