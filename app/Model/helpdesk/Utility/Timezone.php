<?php

namespace App\Model\helpdesk\Utility;

use App\BaseModel;

class Timezone extends BaseModel
{
    public $timestamps = false;
    protected $table = 'core__timezones';
    protected $fillable = ['name', 'location'];
}
