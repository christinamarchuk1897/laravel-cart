<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->longText('description');
            $table->string('genre');
            $table->integer('category_id');
            $table->string('platform');
            $table->string('publisher');
            $table->string('developer');
            $table->date('release_date');
            $table->timestamps();
        //   "title" => "Dauntless"
        //   "thumbnail" => "https://www.freetogame.com/g/1/thumbnail.jpg"
        //   "short_description" => "A free-to-play, co-op action RPG with gameplay similar to Monster Hunter."
        //   "game_url" => "https://www.freetogame.com/open/dauntless"
        //   "genre" => "MMORPG"
        //   "platform" => "PC (Windows)"
        //   "publisher" => "Phoenix Labs"
        //   "developer" => "Phoenix Labs, Iron Galaxy"
        //   "release_date" => "2019-05-21"
        //   "freetogame_profile_url" => "https://www.freetogame.com/dauntless"
        });
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
