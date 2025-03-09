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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('othername');
            $table->string('email');
            $table->string('address');
            $table->string('address2')->nullable();
            $table->string('phone');
            $table->string('dob');
            $table->string('gender');
            $table->string('country');
            $table->string('state');
            $table->string('lga');
            $table->string('qualification')->nullable();
            $table->string('specialization')->nullable();
            $table->string('certifications')->nullable();
            $table->string('experience')->nullable();
            $table->string('info')->nullable();
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
        Schema::dropIfExists('registrations');
    }
};
