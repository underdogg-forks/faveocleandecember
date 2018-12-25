<?php

namespace App\Model\helpdesk\Utility;

use App\BaseModel;

class MailboxProtocol extends BaseModel
{
    public $timestamps = false;
    protected $table = 'email__mailbox_protocols';
    protected $fillable = ['id', 'name', 'value'];
}
