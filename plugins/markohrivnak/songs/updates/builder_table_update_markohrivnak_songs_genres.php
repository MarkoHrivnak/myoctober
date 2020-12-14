<?php namespace MarkoHrivnak\Songs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarkohrivnakSongsGenres extends Migration
{
    public function up()
    {
        Schema::table('markohrivnak_songs_genres', function($table)
        {
            $table->text('lyrics')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('markohrivnak_songs_genres', function($table)
        {
            $table->dropColumn('lyrics');
        });
    }
}
