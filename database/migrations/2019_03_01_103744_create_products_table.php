<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
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
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('price');
            $table->string('image01')->nullable();
            $table->string('image02')->nullable();
            $table->string('image03')->nullable();
            $table->text('description');
            $table->text('feature');
            $table->timestamps();
        });
        DB::table('products')->insert([
            'name' => 'Kawaii Cat Drink Bottle',
            'price' => '19',
            'image01' => 'images/Kawaii_Cat_Drink_Bottle_pink_1024x1024.jpg',
            'image02' => 'images/Kawaii_Cat_Drink_Bottle_blue_1024x1024.jpg',
            'image03' => 'images/Kawaii_Bear_Drink_Bottle_1024x1024.jpg',
            'description' => 'Gourde Kawaii en forme de chat ou d\'ours avec différentes couleurs',
            'feature' => 'Inox - Capacité : 260ml - Dimension : 28.6 x 6.3cm',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'Foulard et bonnet en laine tricoté',
            'price' => '19',
            'image01' => 'images/echarpe_chaude_en_laine_tricotee_1024x1024.jpg',
            'image02' => 'images/echarpe_chaude_en_laine_tricotee_black_1024x1024.jpg',
            'image03' => 'images/echarpe_chaude_en_laine_tricotee_pink_1024x1024.jpg',
            'description' => 'Foulard et bonnet en laine tricotés chauds (couleurs variées)',
            'feature' => '100 % Laine',
            'created_at'  => Carbon::today(),
            'updated_at'  => Carbon::today()
        ]);
        DB::table('products')->insert([
            'name' => 'T-shirt à manches courtes à capuche',
            'price' => '29',
            'image01' => 'images/t-shirt_manches_courtes_capuche_motif_chat_mignon_Kitty _blanc_1024x1024.jpg',
            'image02' => 'images/t-shirt_manches_courtes_capuche_motif_chat_mignon_Kitty _back_blanc_1024x1024.jpg',
            'image03' => 'images/t-shirt_manches_courtes_capuche_motif_chat_mignon_Kitty _gris_1024x1024.jpg',
            'description' => 'Si vous êtes un fan de chatons, ce t-shirt à capuche ne devrait pas manquer à vos collections. La capuche est accentuée par des oreilles de chat, ce qui la rend particulièrement kawaii. Idéale à porter lors de journées décontractées. Portez-le lors d’une promenade ensoleillée dans le parc et profitez du sentiment confortable de cette pièce simple et kawaii.',
            'feature' => '100 % Cotton',
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
        Schema::dropIfExists('products');
    }
}
