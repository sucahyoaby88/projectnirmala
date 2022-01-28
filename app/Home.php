<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Cohensive\Embed\Facades\Embed;

class Home extends Model
{

    public $timestamps = false;

    protected $table = 'homes';
    protected $guarded = [
        'id'
    ];

    public function getEmbed()
    {
        $embed = Embed::make($this->linkyt)->parseUrl();

        if (!$embed)
            return '';

        return $embed->getHtml();
    }
}
