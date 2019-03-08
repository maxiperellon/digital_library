<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use Notifiable;

    protected $primaryKey = 'idAdmin';
    protected $table = 'admin';
    protected $fillable = [
        'name', 'surname', 'email', 'password',  'dni'
    ];
}

