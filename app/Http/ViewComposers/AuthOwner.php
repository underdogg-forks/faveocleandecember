<?php

namespace App\Http\ViewComposers;

use Auth;
use Illuminate\View\View;

class AuthOwner
{
    protected $owner;

    public function __construct()
    {
        $this->owner = Auth::user();
    }

    public function compose(View $view)
    {
        $view->with([
            'auth_owner_role'        => $this->owner->role,
            'auth_owner_id'          => $this->owner->id,
            'auth_owner_profile_pic' => $this->owner->profile_pic,
            'auth_name'              => $this->owner->name(),
            'auth_owner_active'      => $this->owner->active,
            'auth_owner_primary_dept'=> $this->owner->primary_dept,
            'auth_owner_assign_group'=> $this->owner->assign_group,
        ]);
    }
}
