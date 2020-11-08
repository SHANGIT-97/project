<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_tasks', function (Blueprint $table) {
            $table->unsignedBigInteger('EmpID');
            $table->unsignedBigInteger('TaskID');
            $table->unsignedBigInteger('OrderID');
            $table->foreign('EmpID')->references('EmpID')->on('employees');
            $table->foreign('TaskID')->references('TaskID')->on('tasks');
            $table->foreign('OrderID')->references('OrderID')->on('orders');
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
        Schema::dropIfExists('assign_task');
    }
}
