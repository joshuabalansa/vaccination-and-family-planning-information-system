<?php

namespace App\Policies;

use App\Models\User;

class SidebarMenuPolicy
{
    /**
     * Appointment Access
     */
    public function viewAppointments(User $user)
    {
        return $user->role === 1 || $user->role === 3;
    }

    /**
     * Patient Access
     */
    public function viewPatients(User $user)
    {
        return $user->role === 1 || $user->role === 3;
    }
}
