<?php

namespace App\Model\helpdesk\NotificationOLD;

use App\BaseModel;

class OLDUserNotificationOLD extends BaseModel
{
    protected $table = 'user_notifications';
    protected $fillable = [

            'notification_id', 'user_id', 'is_read',
                            ];
}
