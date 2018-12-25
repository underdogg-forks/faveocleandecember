<?php

namespace App\Model\helpdesk\Manage;

use App\BaseModel;

class Help_topic extends BaseModel
{
    protected $table = 'tickets__helptopics';
    protected $fillable = [
        'id', 'topic', 'parent_topic', 'custom_form', 'department', 'tickets__statuses', 'priority',
        'tickets__slaplans', 'thank_page', 'ticket_num_format', 'internal_notes', 'status', 'type', 'auto_assign',
        'auto_response',
    ];

    public function department()
    {
        $related = 'App\Model\helpdesk\Agent\Department';
        $foreignKey = 'core__departments';

        return $this->belongsTo($related, $foreignKey);
    }
}
