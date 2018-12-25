<?php

namespace App\Model\helpdesk\NotificationOLD;

use App\BaseModel;

class OLDNotification extends BaseModel
{
    protected $table = 'notifications';
    protected $fillable = [

            'model_id', 'userid_created', 'type_id',
                            ];
}
