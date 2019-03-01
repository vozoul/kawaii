<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('firstName');
            $table->string('mail')->unique();
            $table->date('birth')->nullable();
            $table->string('gender');
            $table->string('pwd')->nullable();
            $table->string('phone')->nullable();
            $table->string('pseudo')->nullable();
            $table->string('shipping_address');
            $table->string('invoice_address');
            $table->timestamps();
        });
//        DB::table('customers')->insert([
//           'nom_champ' => 'valeur_champ',
//           //when timestamps
//           'nom_champ' => Carbon::today(),
//
//        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
