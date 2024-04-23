<?php

namespace App\Policies;

use App\Models\User;

class SidebarMenuPolicy
{
    /**
     * Appointment Access
     * @param \App\Models\user $user
     * @return bool
     */
    public function viewAppointments(User $user)
    {
        return $user->role === 1 || $user->role === 3;
    }

   /**
     * Patient Access
     * @param \App\Models\user $user
     * @return bool
     */
    public function viewPatients(User $user)
    {
        return $user->role === 1 || $user->role === 3;
    }
}
