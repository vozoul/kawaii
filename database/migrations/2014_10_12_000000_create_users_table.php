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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 140);
            $table->string('firstName', 140);
            $table->string('email', 140)->unique();
            $table->string('password', 140);
            $table->string('phone', '20');
            $table->date('birth')->nullable();
            $table->integer('shipping_address')->nullable()->unsigned();
            $table->integer('invoice_address')->nullable()->unsigned();
//            $table->timestamp('email_verified_at')->nullable();
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
