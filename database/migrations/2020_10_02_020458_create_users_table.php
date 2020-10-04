<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('document_number', 25);
            $table->string('name', 50);
            $table->string('last_name', 50);
            $table->date('birth_date');
            $table->string('age', 3);
            $table->string('email', 50);
            $table->string('password');
            $table->bigInteger('document_types_id')->unsigned();
            $table->foreign('document_types_id')->references('id')->on('document_types');
            $table->bigInteger('genders_id')->unsigned();
            $table->foreign('genders_id')->references('id')->on('genders');
            $table->bigInteger('roles_id')->unsigned();
            $table->foreign('roles_id')->references('id')->on('roles');
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
