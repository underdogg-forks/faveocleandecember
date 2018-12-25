<?php

namespace App\Model\helpdesk\Workflow;

use App\BaseModel;

class WorkflowAction extends BaseModel
{
    public $timestamps = false;
    protected $table = 'workflow__actions';
    protected $fillable = ['id', 'workflow_id', 'condition', 'action', 'updated_at', 'created_at'];
}
