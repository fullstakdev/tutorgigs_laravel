<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssesmentRule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assesment_rule', function (Blueprint $table) {
            $table->id();
            $table->integer('district_id');
            $table->foreign('district_id')->references('id')->on('loc_district');
            $table->integer('grade_id');
            $table->foreign('grade_id')->references('id')->on('terms');
            $table->unsignedInteger('school_id');
            $table->foreign('school_id')->references('SchoolId')->on('schools');
            $table->string('lesson_ids');
            $table->boolean('is_general')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assesment_rule');
    }
}
