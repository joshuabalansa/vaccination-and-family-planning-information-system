<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Requests\AppointmentRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\SendNotificationTrait;
use Illuminate\Support\Facades\Hash;

class AppointmentController extends Controller
{

    use SendNotificationTrait;

    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function appointmentPage()
    {
        return view('pages.appointment-page');
    }

    /**
     * Register.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(AppointmentRequest $request)
    {

        try {

            $validatedData = $request->validated();

            $createAppointment = Appointment::create($validatedData);

            if ($createAppointment) {

                return redirect()->route('appointment.success');
            }

        } catch(\Exception $e) {

            return redirect()->back()->with('error', 'Oops! Something went wrong. ' . $e->getMessage());
        }
    }

    /**
     * Retrieve and search appointment Records
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function appointmentRecords(Request $request)
    {

        $this->authorize('viewAppointments', Appointment::class);

        if ($request->has('search')) {

            $search = $request->input('search');

            $appointments = Appointment::query();
        
            if ($search) {
                $appointments->where('firstname', 'like', '%' . $search . '%')
                             ->orWhere('lastname', 'like', '%' . $search . '%')
                             ->orWhere('status', 'like', '%' . $search . '%');
            }
        
            $appointments = $appointments->paginate(10);

        } else {

            $appointments = Appointment::paginate(10);
        }

        return view('admin.appointment.records', compact('appointments'));
    }

    /**
     * view successful page
     * @return \Illiminate\View\View
     */
    public function successfulPage()
    {

        return view('pages.success-page');
    }


    /**
     * Update an appointment to "accepted"
     *
     * @param \App\Models\Appointment $appointment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function accept(Appointment $appointment)
    {

        try {

            if ($appointment->status === 'pending') {

                $name = $appointment->firstname . ' ' . $appointment->lastname;

                $password = rand(999999,9999999);

                $this->createUser($name, $password);

                $this->sendMessageNotification($appointment->phone, "Your appointment has been confirmed! you will be notify before your appointment schedule, you can use this password to login $password and your email");
            }

            $appointment->status = 'accepted';
    

            if ($appointment->save()) {

                return redirect()->back()->with('success', 'Appointment accepted!');

            }

        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Opps! Something went wrong. ' . $e->getMessage());
        }
    }

    /**
     * create user function
     *
     * @param string $name
     * @param string $password
     * @return void
     */
    public function createUser($name, $password) {

        User::create([
            'name'     => $name,
            'email'    => 'joshua@joshua.com',
            'role'     => 2,
            'password' => Hash::make($password),
        ]);
    }

    /**
     * Update an appointment to "cancelled"
     *
     * @param \App\Models\Appointment $appointment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function cancel(Appointment $appointment)
    {

        try {

            $appointment->status = 'cancelled';

            if ($appointment->save()) {

                return redirect()->back()->with('success', 'Appointment has been cancelled');
            }

        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Opps! Something went wrong. ' . $e->getMessage());
        }
    }

     /**
     * remove appointment
     *
     * @param \App\Models\Appointment $appointment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Appointment $appointment)
    {

        try {

            $remove = $appointment->delete();

            if ($remove) {

                return redirect()->back()->with('success', 'Appointment has been deleted');
            }

        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Opps! Something went wrong. ' . $e->getMessage());
        }
    }

    /**
     * show appointment
     *
     * @param \App\Models\Appointment $appointment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show(Appointment $appointment)
    {

        try {

            dd($appointment);

        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Opps! Something went wrong. ' . $e->getMessage());
        }
    }
}
