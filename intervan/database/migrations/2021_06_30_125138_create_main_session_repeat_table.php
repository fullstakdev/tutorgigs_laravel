<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainSessionRepeatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_session_repeat', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('rule_id')->unsigned();
            $table->foreign('rule_id')->references('id')->on('assesment_rule')->onDelete('cascade');
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
        Schema::dropIfExists('main_session_repeat');
    }
}
