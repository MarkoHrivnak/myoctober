<?php namespace MarkoHrivnak\Songs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarkohrivnakSongs2 extends Migration
{
    public function up()
    {
        Schema::table('markohrivnak_songs_', function($table)
        {
            $table->string('genres')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('markohrivnak_songs_', function($table)
        {
            $table->dropColumn('genres');
        });
    }
}
