<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->double('price')->unsigned();
            $table->string(asset("images/'picture'"))->nullable();
            $table->text('description');
            $table->timestamps();
        });
        DB::table('products')->insert([
            'name' => 'Dress butterfly',
            'price' => '59',
            'picture' => asset('images/dress_butterfly.jpg'),
            'description' => 'Robe blanche à motifs papillons Size 8 M',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Sweat unicorn',
            'price' => '23',
            'picture' => asset('images/sweat_unicorn.jpg'),
            'description' => 'Sweat-shirt blanc licorne',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'T-shirt sushi',
            'price' => '29',
            'picture' => asset('images/t-shirt_sushi.jpg'),
            'description' => 'T-shirt blanc \'je peut pas j\'ai sushi\' ' ,
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'White dress lolita',
            'price' => '129',
            'picture' => asset('images/white_dress.jpg'),
            'description' => 'Robe blanche style\' lolita\' Size 38 M',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Blue and white dress lolita',
            'price' => '49',
            'picture' => asset('images/blue_and_white_dress.jpg'),
            'description' => 'Robe bleu et blanche style \'lolita\' ',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
    }

//    DB:table ('products')->create([
//        'name'=>'',
//        'price'=>'',
//'picture' => asset(''),
//'description' => '',
//'created_at'  => Carbon::today(),
//'updated_at'  => Carbon::today()
//])

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema::dropIfExists('products');
    }
}
