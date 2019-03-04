<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_categories', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('product_id');
            $table->timestamps();
        });
        Schema::table('products_categories', function(Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('products_categories', function(Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        DB::table('products_categories')->insert([
            'category_id' => 1,
            'product_id' => 1,
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'category_id' => 1,
            'product_id' => 2,
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'category_id' => 2,
            'product_id' => 1,
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
        DB::table('products_categories')->insert([
            'category_id' => 3,
            'product_id' => 1,
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
        Schema::table('products_categories', function(Blueprint $table) {
            $table->dropForeign('category_id');
        });
        Schema::table('products_categories', function(Blueprint $table) {
            $table->dropForeign('product_id');
        });
        Schema::dropIfExists('products_categories');
    }
}
