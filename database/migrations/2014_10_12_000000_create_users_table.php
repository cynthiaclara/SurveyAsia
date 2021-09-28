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
            $table->string('username', 255);
            $table->string('password');
            $table->string('email')->unique();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->bigInteger('no_telp');
            $table->enum('gender', ['L', 'P']);
            $table->date('tanggal_lahir');
            $table->string('profesi');
            $table->string('alamat', 255);
            $table->bigInteger('Nik');
            $table->string('company', 255);
            $table->timestamp('created_at')->nullable();
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
