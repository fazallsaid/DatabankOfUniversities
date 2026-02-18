<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('university', function (Blueprint $table) {
            $table->increments('university_id');
            $table->string('university_name');
            $table->string('university_acronym');
            $table->string('university_address');
            $table->string('university_acreditation');
            $table->string('university_website');
            $table->integer('user_id');
            $table->timestamps();
        });

        Schema::create('user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('username');
            $table->string('email');
            $table->text('password');
            $table->string('f_name');
            $table->string('l_name');
            $table->text('location');
            $table->string('job_role');
            $table->enum('role', ['administrator','contributor','coders']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('university');
        Schema::dropIfExists('user');
    }
};
