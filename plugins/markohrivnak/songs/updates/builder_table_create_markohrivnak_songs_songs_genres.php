<?php namespace MarkoHrivnak\Songs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarkohrivnakSongsSongsGenres extends Migration
{
    public function up()
    {
        Schema::create('markohrivnak_songs_songs_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('song_id');
            $table->integer('genre_id');
            $table->primary(['song_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('markohrivnak_songs_songs_genres');
    }
}
