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
            $table->string('first-name');
            $table->string('last-name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->bigInteger('no_telp')->nullable();
            $table->enum('gender', ['L', 'P'])->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('profesi')->nullable();
            $table->string('alamat')->nullable();
            $table->bigInteger('Nik')->nullable();
            $table->enum('status', ['researcher', 'responden'])->nullable();
            $table->string('company')->nullable();
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
