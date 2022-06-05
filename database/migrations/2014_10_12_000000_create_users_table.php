<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->binary('img');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('living_place');
            $table->string('gender');
            $table->string('phone');
            $table->string('uni');
            $table->string('bio');
            $table->string('profission');
            $table->longText('github_link');
            $table->longText('linkedIn_acc');
            $table->longText('sof_acc');
            $table->string('lang');
            $table->longText('skills');
            $table->longText('activity');
            $table->string('birthdate');
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
};
