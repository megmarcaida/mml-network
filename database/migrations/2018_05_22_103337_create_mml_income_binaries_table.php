<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMmlIncomeBinariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mml_income_binaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->string('accountid');
            $table->boolean('isPair');
            $table->dateTime('dateentry');
            $table->decimal('amount', 5, 2);
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
        Schema::dropIfExists('mml_income_binaries');
    }
}
