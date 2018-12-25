<?php

namespace App\Http\ViewComposers;

use Auth;
use Illuminate\View\View;

class AuthStaff
{
    protected $staff;

    public function __construct()
    {
        $this->staff = Auth::user();
    }

    public function compose(View $view)
    {
        $view->with([
            'auth_staff_role'        => $this->staff->role,
            'auth_staff_id'          => $this->staff->id,
            'auth_staff_profile_pic' => $this->staff->profile_pic,
            'auth_name'              => $this->staff->name(),
            'auth_staff_active'      => $this->staff->active,
            'auth_staff_primary_dept'=> $this->staff->primary_dept,
            'auth_staff_assign_group'=> $this->staff->assign_group,
        ]);
    }
}
