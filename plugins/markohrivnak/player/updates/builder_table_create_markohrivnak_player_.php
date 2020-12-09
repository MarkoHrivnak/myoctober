<?php namespace MarkoHrivnak\Player\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMarkohrivnakPlayer extends Migration
{
    public function up()
    {
        Schema::create('markohrivnak_player_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->integer('club');
            $table->text('description');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('markohrivnak_player_');
    }
}
