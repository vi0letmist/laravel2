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
        /*
            id, nama, email, username, password, created_at, updated_at, deleted_at
        */
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',50);
            $table->string('email',50)->unique();
            $table->string('username',50)->unique();
            $table->string('password',100);
            $table->timestamps();
            $table->softDelete();
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