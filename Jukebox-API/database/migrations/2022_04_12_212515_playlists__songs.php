<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlaylistsSongs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //
    public function up()
    {
        Schema::create('songs_from_playlists', function (Blueprint $table) {
            $table->id();
            $table->integer('playlist_id');
            $table->integer('song_id');
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
        Schema::dropIfExists('playlists_songs');
    }
}
