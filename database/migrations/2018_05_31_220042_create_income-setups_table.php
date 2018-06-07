<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomeSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income_setups', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('sponsor_income', 5, 2);
            $table->decimal('pairing_income', 5, 2);
            $table->decimal('direct_income', 5, 2);
            $table->decimal('indirect_income', 5, 2);
            $table->decimal('leadership_income', 5, 2);
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('income-setups');
    }
}
