<?php

namespace App\Model\helpdesk\Agent;

use App\BaseModel;

class Department extends BaseModel
{
    protected $table = 'core__departments';
    protected $fillable = [
        'name', 'type', 'slaplan_id', 'manager', 'ticket_assignment', 'outgoing_email',
        'template_set', 'auto_ticket_response', 'auto_message_response',
        'auto_response_email', 'recipient', 'group_access', 'department_sign',
    ];
}
