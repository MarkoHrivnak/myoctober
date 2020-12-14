<?php namespace MarkoHrivnak\Songs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarkohrivnakSongsGenres extends Migration
{
    public function up()
    {
        Schema::create('markohrivnak_songs_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('markohrivnak_songs_genres');
    }
}
