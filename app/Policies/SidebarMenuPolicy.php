<?php

namespace App\Policies;

use App\Models\User;

class SidebarMenuPolicy
{
    /**
     * Create a new policy instance.
     */
    public function viewAppointments(User $user)
    {
        return $user->role === 1 || $user->role === 3;
    }
}
