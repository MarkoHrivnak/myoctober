<?php namespace MarkoHrivnak\Songs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarkohrivnakSongs extends Migration
{
    public function up()
    {
        Schema::table('markohrivnak_songs_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('markohrivnak_songs_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
