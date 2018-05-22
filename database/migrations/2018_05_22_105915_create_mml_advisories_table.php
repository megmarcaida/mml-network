<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMmlAdvisoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mml_advisories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->text('message');
            $table->dateTime('dateposted');
            $table->boolean('isNew');
            $table->string('fileName');
            $table->boolean('hasFile');
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
        Schema::dropIfExists('mml_advisories');
    }
}
