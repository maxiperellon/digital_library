<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Book extends Model
{
    use Notifiable;

    protected $primaryKey = 'id';
    protected $table = 'books';
    protected $fillable = [
        'isbn', 'name', 'publisher', 'edition', 'author',  'category'
    ];

    public function students (){
        return $this->belongsToMany(Student::class);
    }



    /*public function findVoterByDNI($voter_dni){
        return Voter::whereDni($voter_dni)->first();
    }*/
}
