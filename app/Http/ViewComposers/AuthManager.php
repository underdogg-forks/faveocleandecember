<?php

namespace App\Http\ViewComposers;

use Auth;
use Illuminate\View\View;

class AuthManager
{
    protected $manager;

    public function __construct()
    {
        $this->manager = Auth::user();
    }

    public function compose(View $view)
    {
        $view->with([
            'auth_manager_role'        => $this->manager->role,
            'auth_manager_id'          => $this->manager->id,
            'auth_manager_profile_pic' => $this->manager->profile_pic,
            'auth_name'                => $this->manager->name(),
            'auth_manager_active'      => $this->manager->active,
            'auth_manager_primary_dept'=> $this->manager->primary_dept,
            'auth_manager_assign_group'=> $this->manager->assign_group,
        ]);
    }
}
