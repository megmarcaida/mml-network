<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMmlAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mml_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->string('account_no', 20)->nullable();
            $table->string('sponsor_id', 20)->nullable();
            $table->string('upline_id', 20)->nullable();
            $table->boolean('position')->default(3);
            $table->boolean('pvpairs')->default(0);
            $table->integer('rightpv')->default(0);
            $table->integer('leftpv')->default(0);
            $table->integer('totaldirect')->default(0);
            $table->integer('rightGroup')->default(0);
            $table->integer('leftGroup')->default(0);
            $table->dateTime('datetomaintain');
            $table->dateTime('dateentry');
            $table->integer('isSeventhPair');
            $table->boolean('isUpgraded');
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
        Schema::dropIfExists('mml_accounts');
    }
}
