<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * @method static pluck($string, $string1)
 */
class Book extends Model
{
    use Notifiable;

    protected $primaryKey = 'id';
    protected $table = 'books';
    protected $fillable = [
        'isbn', 'name', 'publisher', 'edition', 'author',  'category', 'condition',
    ];

    public function students (){
        return $this->belongsToMany(Student::class);
    }

}
