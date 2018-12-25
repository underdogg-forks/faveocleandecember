<?php

namespace App\Model\helpdesk\NotificationOLD;

use App\BaseModel;

class OLDNotificationTypeOLD extends BaseModel
{
    protected $table = 'notification_types';
    protected $fillable = [

            'message', 'type', 'icon_class',
                            ];
}
