<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    public $timestamps = false;
    
    protected $table = 'teams';
    protected $guarded = [
        'id'
    ];

}