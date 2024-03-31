<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Http\Requests\AppointmentRequest;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.appointment.index');
    }

    /**
     * Register.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
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
    public function appointmentRecords()
    {

        $appointments = Appointment::paginate(10);

        return view('admin.appointment.records', compact('appointments'));
    }

    /**
     * view successful page
     */
    public function successfulPage()
    {
        
        return view('admin.appointment.success-page');
    }
}
