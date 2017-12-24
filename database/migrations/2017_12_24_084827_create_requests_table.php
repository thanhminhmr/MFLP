<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject', 255);
            $table->text('content');
            $table->integer('created_by');
            $table->integer('status_id');
            $table->integer('priority_id');
            $table->integer('department_id');
            $table->dateTime('created_at');
            $table->dateTime('deadline_at');
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('resolved_at')->nullable();
            $table->dateTime('closed_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('reopened_at')->nullable();
            $table->integer('assigned_to')->nullable();
            $table->integer('team_id')->nullable();
            $table->integer('rating_id')->nullable();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('priority_id')->references('id')->on('priorities');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('assigned_to')->references('id')->on('users');
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('rating_id')->references('id')->on('ratings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
