<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    public $timestamps = false;

    protected $table = 'teams';
    protected $guarded = [
        'id'
    ];

}
