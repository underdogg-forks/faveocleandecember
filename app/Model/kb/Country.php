<?php

namespace App\Model\kb;

use App\BaseModel;

class Country extends BaseModel
{
    public $table = 'kb__country';
    protected $fillable = ['country_code', 'country_name'];
}
