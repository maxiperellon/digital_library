<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $primaryKey = 'idAdmin';
    protected $table = 'admin';
    protected $fillable = [
        'name', 'surname', 'email', 'password',  'hjjjkj'
    ];
}

