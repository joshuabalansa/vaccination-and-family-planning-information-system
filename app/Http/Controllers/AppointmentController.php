<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Requests\AppointmentRequest;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function vaccinationPage()
    {
        return view('pages.vaccination-page');
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
     * Retrieve all appointment Records
     * @return \Illuminate\View\View
     */
    public function appointmentRecords(Request $request)
    {

        $this->authorize('viewAppointments', Appointment::class);

        if ($request->has('search')) {

            $search = $request->input('search');

            $appointments = Appointment::query();
        
            if ($search) {
                $appointments->where('name', 'like', '%' . $search . '%')
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

            $appointment->status = 'accepted';

            if ($appointment->save()) {

                return redirect()->back()->with('success', 'Appointment accepted!');

            }

        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Opps! Something went wrong. ' . $e->getMessage());
        }
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
