<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAskformoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('askformoney', function (Blueprint $table) {
            $table->increments('ask_moneyId');
         $table->text('animal_id');
             $table->text('priority');
             $table->text('money_status');
            $table->text('money');
            $table->timestamps('whenStart');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('askformoney');
    }
}
