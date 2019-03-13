<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Student extends Model
{
    use Notifiable;

    protected $primaryKey = 'id';
    protected $table = 'students';
    protected $fillable = [
        'dni', 'name', 'career', 'email', 'phone', 'address'
    ];

    public function books (){
        return $this->belongsToMany(Book::class);
    }

}
