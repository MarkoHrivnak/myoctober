<?php namespace MarkoHrivnak\Songs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarkohrivnakSongs7 extends Migration
{
    public function up()
    {
        Schema::table('markohrivnak_songs_', function($table)
        {
            $table->dropColumn('image');
        });
    }
    
    public function down()
    {
        Schema::table('markohrivnak_songs_', function($table)
        {
            $table->string('image', 255)->nullable();
        });
    }
}
