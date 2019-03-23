<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ForHire extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $table = 'for_hire';
    protected $fillable = [
        'id_student', 'id_book', 'id_user'
    ];

    public function students(){
        return $this->hasOne(Student::class);
    }

    public function books(){
        return $this->hasMany(Book::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
