<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table-> string('name');
            $table->text('description');
            $table->timestamps();
        });
        DB::table('categories')->insert([
            'name' => 'vetements',
            'description'=> 'Kawaii vetements',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
        DB::table('categories')->insert([
           'name' => 'accessoires',
           'description'=> 'Kawaii accessoires',
           'created_at'  => Carbon::today(),
           'updated_at'  => Carbon::today()
        ]);
        DB::table('categories')->insert([
            'name' => 'goodies',
            'description'=> 'Kawaii goodies',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
        DB::table('categories')->insert([
            'name' => 'kawaii',
            'description'=> 'Kawaii super kawaii',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
