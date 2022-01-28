<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    public $timestamps = false;
    
    protected $table = 'admins';
    protected $fillable = [
        'username',
        'password'
    ];

}