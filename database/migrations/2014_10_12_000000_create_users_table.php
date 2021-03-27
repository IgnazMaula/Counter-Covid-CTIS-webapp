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
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['patient', 'manager', 'tester']);
            $table->enum('gender', ['male', 'female']);

            //Patient Only
            $table->string('birthDate')->nullable();
            $table->enum('currentStatus', ['Not Tested', 'Returnee', 'Quarantined', 'Close Contact', 'Suspected', 'Infected']);

            //Tester and Manager
            $table->string('testCenter')->nullable();

            // $table->rememberToken();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->timestamps();
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