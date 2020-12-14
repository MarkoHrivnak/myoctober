<?php namespace MarkoHrivnak\Songs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarkohrivnakSongs5 extends Migration
{
    public function up()
    {
        Schema::table('markohrivnak_songs_', function($table)
        {
            $table->binary('image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('markohrivnak_songs_', function($table)
        {
            $table->dropColumn('image');
        });
    }
}
