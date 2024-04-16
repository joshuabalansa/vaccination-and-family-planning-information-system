<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Requests\AppointmentRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\SendNotificationTrait;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;

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

        $appointments = Appointment::where(['status' => 'pending'])->get();

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

            $name = $appointment->firstname . ' ' . $appointment->lastname;
            $email = $this->getUniqueEmail($appointment);
            $randomPassword = Str::random(6);

            $message = Config::get('messages.appointment_approved') . "\n \n Username: $email \n Password: $randomPassword";

            if ($appointment->status === 'pending') {

                 $user = new User;

                 $user->createUser($name, $email, 2, $randomPassword);

                $this->sendMessageNotification($appointment->phone, $message);

                $appointment->status = 'approved';

                if ($appointment->save()) {

                    return redirect()->back()->with('success', 'Appointment accepted!');
                }
            }

        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Opps! Something went wrong. ' . $e->getMessage());
        }
    }

    /**
     * Get combination email function
     *
     * @param object $appointment
     * @return string $uniqueEmail
     */
    public function getUniqueEmail($appointment) {

        $fname = substr($appointment->firstname, 0, 1);
        $mname = substr($appointment->middlename, 0, 1);
        $lname = substr($appointment->lastname, 0, 1);
        $birthdate = explode('-', $appointment->birthdate);
        $day = $birthdate[1];
        $month = $birthdate[2];
        $year = substr($birthdate[0], -2);

        $uniqueEmail = $fname . $mname . $lname . $day . $month . $year;

        return strtoupper($uniqueEmail);
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

            return view('admin.appointment.info', compact('appointment'));

        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Opps! Something went wrong. ' . $e->getMessage());
        }
    }
}
