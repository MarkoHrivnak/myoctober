<?php namespace MarkoHrivnak\Songs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarkohrivnakSongs6 extends Migration
{
    public function up()
    {
        Schema::table('markohrivnak_songs_', function($table)
        {
            $table->string('image')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('markohrivnak_songs_', function($table)
        {
            $table->binary('image')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
