<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		// Create Tables
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('position_id')->unsigned();
            $table->integer('team_id')->unsigned();
            $table->string('username', 127)->unique();
            $table->string('email', 127)->unique();
            $table->string('password', 255);
            $table->string('fullname', 255);
            $table->string('avatar', 255);
            $table->rememberToken();
        });
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject', 255);
            $table->text('content');
            $table->integer('created_by')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->integer('priority_id')->unsigned();
            $table->integer('department_id')->unsigned();
            $table->dateTime('created_at');
            $table->dateTime('deadline_at');
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('resolved_at')->nullable();
            $table->dateTime('closed_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('reopened_at')->nullable();
            $table->integer('assigned_to')->unsigned()->nullable();
            $table->integer('team_id')->unsigned()->nullable();
            $table->integer('rating_id')->unsigned()->nullable();
        });
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('request_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('content');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->string('note', 255)->nullable();
            $table->integer('reply_to')->unsigned()->nullable();
            $table->integer('type_id')->unsigned()->nullable();
        });
        Schema::create('relaters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('request_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->unique(['request_id', 'user_id']);
        });
        Schema::create('reads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('request_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->unique(['request_id', 'user_id']);
        });
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('position_id')->unsigned();
            $table->integer('department_id')->unsigned();
            $table->integer('view_level')->unsigned();
            $table->integer('edit_level')->unsigned();

            $table->unique(['position_id', 'department_id']);
        });
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_id')->unsigned();
            $table->string('name', 255);
        });
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('request_id')->unsigned();
            $table->string('image_url', 255);
        });
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
        });
        Schema::create('priorities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
        });
        Schema::create('ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
        });
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
        });
        Schema::create('types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
        });
        Schema::create('positions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
        });
        Schema::create('levels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->integer('permission');
        });
		
		// Add Foreign Keys
        Schema::table('users', function(Blueprint $table) {
            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('team_id')->references('id')->on('teams');
        });
        Schema::table('requests', function(Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('priority_id')->references('id')->on('priorities');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('assigned_to')->references('id')->on('users');
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('rating_id')->references('id')->on('ratings');
        });
        Schema::table('comments', function(Blueprint $table) {
            $table->foreign('request_id')->references('id')->on('requests');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('reply_to')->references('id')->on('comments');
            $table->foreign('type_id')->references('id')->on('types');
        });
        Schema::table('relaters', function(Blueprint $table) {
            $table->foreign('request_id')->references('id')->on('requests');
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('reads', function(Blueprint $table) {
            $table->foreign('request_id')->references('id')->on('requests');
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('permissions', function(Blueprint $table) {
            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('view_level')->references('id')->on('levels');
            $table->foreign('edit_level')->references('id')->on('levels');
        });
        Schema::table('teams', function(Blueprint $table) {
            $table->foreign('department_id')->references('id')->on('departments');
        });
        Schema::table('images', function(Blueprint $table) {
            $table->foreign('request_id')->references('id')->on('requests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('requests');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('relaters');
        Schema::dropIfExists('reads');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('teams');
        Schema::dropIfExists('images');
        Schema::dropIfExists('statuses');
        Schema::dropIfExists('priorities');
        Schema::dropIfExists('ratings');
        Schema::dropIfExists('departments');
        Schema::dropIfExists('types');
        Schema::dropIfExists('positions');
        Schema::dropIfExists('levels');
    }
}
