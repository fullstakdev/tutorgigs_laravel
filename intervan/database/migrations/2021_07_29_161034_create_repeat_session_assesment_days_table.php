<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepeatSessionAssesmentDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repeat_session_assesment_days', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('prev_session_id')->nullable();
            $table->unsignedInteger('repeat_session_id')->nullable();
            $table->date('assesment_date');
            $table->integer('assesment_day');
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
        Schema::dropIfExists('repeat_session_assesment_days');
    }
}
