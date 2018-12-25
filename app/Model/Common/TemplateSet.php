<?php

namespace App\Model\Common;

use App\BaseModel;

class TemplateSet extends BaseModel
{
    protected $table = 'email__templatesets';
    protected $fillable = ['name', 'active'];
}
