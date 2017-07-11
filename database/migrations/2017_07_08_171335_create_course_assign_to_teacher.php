<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseAssignToTeacher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_assign_teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_id');
            $table->integer('teacher_id');
            $table->decimal('credit_taken', 4, 1);
            $table->decimal('credit_remain', 4, 1);
            $table->integer('course_code');
            $table->softDeletes();
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
        Schema::dropIfExists('course_assign_teachers');
    }
}
