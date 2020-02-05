<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sex');
            $table->string('age');
            $table->string('department');
            $table->string('school');
            $table->string('phone');
            $table->string('matric_number');
            $table->string('mis_score');
            $table->string('project_score');
            $table->string('graphics_score');
            $table->string('information_score');
            $table->string('statistics_score');
            $table->string('computer_score');
            $table->string('mis_unit');
            $table->string('project_unit');
            $table->string('graphics_unit');
            $table->string('information_unit');
            $table->string('statistics_unit');
            $table->string('computer_unit');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
