<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Appointment;

class AppointmentPolicy
{
    
    public function viewAppointments(User $user)
    {
        return $user->role === 1 || $user->role === 3;
    }
    
}
