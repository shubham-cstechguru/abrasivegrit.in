<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];

    public function country()
    {
        return $this->hasOne('App\Model\Country', 'id', 'country_id');
    }
}
