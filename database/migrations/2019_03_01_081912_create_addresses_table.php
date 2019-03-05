<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street', 140);
            $table->integer('postCode');
            $table->string('city', 140);
            $table->string('country', 140);
            $table->string('complement', 140)->nullable();
            $table->timestamps();
        });

        DB::table('addresses')->insert([
            'street' => '23 rue de la grenette',
            'postCode' => '74370',
            'city' => 'Epagny Metz Tessy',
            'country' => 'France',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);

        DB::table('addresses')->insert([
            'street' => '123 Rue du bois',
            'postCode' => '74000',
            'city' => 'Annecy',
            'country' => 'France',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);

        DB::table('addresses')->insert([
            'street' => '123 Rue du Rock',
            'postCode' => '74410',
            'city' => 'Saint-Jorioz',
            'country' => 'France',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);

        DB::table('addresses')->insert([
            'street' => '12 Freddy lafreux',
            'postCode' => '74000',
            'city' => 'Annecy',
            'country' => 'France',
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
}
