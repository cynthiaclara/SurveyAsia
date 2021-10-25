<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->bigInteger('nik')->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->enum('gender', ['L', 'P']);
            $table->string('birth_place', 25);
            $table->date('birth_date');

            //ktp address
            $table->string('ktp_province', 50);
            $table->string('ktp_city', 50);
            $table->string('ktp_district', 50);
            $table->bigInteger('ktp_postal_code');
            $table->string('ktp_address');

            //address
            $table->string('province', 50);
            $table->string('city', 50);
            $table->string('district', 50);
            $table->bigInteger('postal_code');
            $table->string('address');

            //optional
            $table->string('avatar')->nullable();

            //for employee
            $table->string('job');
            $table->string('job_location');


            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_profiles');
    }
}
