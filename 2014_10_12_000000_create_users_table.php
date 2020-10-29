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
            $table->string('name');
            //$table->string('email')->unique(); // Got error msg SQLSTATE[42000]: 
		//Syntax error or access violation: 1071 Specified key was too long; max key length is 1000 bytes 
		//(SQL: alter table `users` add unique `users_email_unique`(`email`))
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
           $table->string('testme'); // test by jcd
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
