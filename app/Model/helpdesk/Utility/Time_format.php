<?php

namespace App\Model\helpdesk\Utility;

use App\BaseModel;

class Time_format extends BaseModel
{
    public $timestamps = false;
    protected $table = 'core__timeformats';
    protected $fillable = ['id', 'format'];
}
