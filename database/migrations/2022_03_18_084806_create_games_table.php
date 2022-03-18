<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function
            (Blueprint $table) {
                $table->id();
                $table->string('gameName',30);
                $table->decimal('gamePrice', 10, 2)->nullable();
                $table->longtext('gameDesc');
                $table->string('gamePublisher',30);
                $table->integer('gameAgeRating')->nullable();
                $table->string('gameGenre',30);
                $table->date('gameReleaseDate')->nullable();
                $table->string('gameLanguage',30);
                $table->string('gameRequirement',100);
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
        Schema::dropIfExists('games');
    }
}
