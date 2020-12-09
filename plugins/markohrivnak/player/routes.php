<?php
 use markohrivnak\player\models\player;

Route::get('api/player', function(){

    $player = Player::all();

    return $player;
});