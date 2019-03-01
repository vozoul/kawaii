<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


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
            $table->string('picture')->nullable();
            $table->text('description');
            $table->timestamps();
        });

        DB::table('products')->insert([
            'category_id'=> 1,
            'name' => 'Dress butterfly',
            'price' => '59',
            'picture' => 'images/dress_butterfly.jpg',
            'description' => 'Robe blanche à motifs papillons Size 8 M',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
        DB::table('products')->insert([
            'category_id'=> 1,
            'name' => 'Sweat unicorn',
            'price' => '23',
            'picture' => 'images/sweat_unicorn.jpg',
            'description' => 'Sweat-shirt blanc licorne',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
        DB::table('products')->insert([
            'category_id'=> 1,
            'name' => 'T-shirt sushi',
            'price' => '29',
            'picture' => 'images/t-shirt_sushi.jpg',
            'description' => 'T-shirt blanc \'je peut pas j\'ai sushi\' ' ,
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
        DB::table('products')->insert([
            'category_id'=> 1,
            'name' => 'White dress lolita',
            'price' => '129',
            'picture' => 'images/white_dress',
            'description' => 'Robe blanche style\' lolita\' Size 38 M',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
        DB::table('products')->insert([
            'category_id'=> 1,
            'name' => 'Blue and white dress lolita',
            'price' => '49',
            'picture' => 'images/blue_and_white_dress.jpg',
            'description' => 'Robe bleu et blanche style \'lolita\' ',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
