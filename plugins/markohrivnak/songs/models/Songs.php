<?php namespace MarkoHrivnak\Songs\Models;

use Model;

/**
 * Model
 */
class Songs extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'markohrivnak_songs_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    public $belongsToMany = [
    
        'genres' =>[ 
           'MarkoHrivnak\Songs\Models\Genre',
           'table' => 'markohrivnak_songs_songs_genres',
           'key' => 'song_id',
           'otherKey'  => 'genre_id'
        ]
        
       ];
}


     
