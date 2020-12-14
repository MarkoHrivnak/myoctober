<?php namespace MarkoHrivnak\Songs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarkohrivnakSongs extends Migration
{
    public function up()
    {
        Schema::create('markohrivnak_songs_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('song_name');
            $table->string('song_artist');
            $table->text('description');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('markohrivnak_songs_');
    }
}
