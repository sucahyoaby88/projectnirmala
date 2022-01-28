<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Advantage extends Model
{

    public $timestamps = false;

    protected $table = 'advantages';
    protected $guarded = [
        'id'
    ];

    public function home()
    {
        return $this->belongsTo(User::class, 'id_home');
    }
}
