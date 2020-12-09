<?php namespace MarkoHrivnak\Player\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMarkohrivnakPlayer extends Migration
{
    public function up()
    {
        Schema::table('markohrivnak_player_', function($table)
        {
            $table->integer('number')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('markohrivnak_player_', function($table)
        {
            $table->dropColumn('number');
        });
    }
}
