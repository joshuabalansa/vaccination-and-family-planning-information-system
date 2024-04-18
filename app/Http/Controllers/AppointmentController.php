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
        $fields = [
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'birth_date' => 'Birth Date',
            'body_weight' => 'Body Weight',
            'body_length' => 'Body Length',
            'address' => 'Address',
            'gravida' => 'Gravida',
            'para' => 'Para',
            'abortion' => 'Abortion',
            'live_birth' => 'Live Birth',
            'death' => 'Death',
            'philhealth' => 'Philhealth',
            '4ps_number' => '4Ps Number',
            'mother_maiden_name' => 'Mother Maiden Name',
            'mother_birth_date' => 'Mother Birth Date',
            'mother_age' => 'Mother Age',
            'mother_occupation' => 'Mother Occupation',
            'father_name' => 'Father Name',
            'father_birth_date' => 'Father Birth Date',
            'father_age' => 'Father Age',
            'father_occupation' => 'Father Occupation',
            'phone_number' => 'Phone Number',
            'appointment_time' => 'Appointment Time',
            'appointment_date' => 'Appointment Date',
        ];

        return view('pages.appointment-page', compact('fields'));
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

        if ($appointment->status !== 'pending') {

            return redirect()->back()->with('error', 'Appointment status is not pending.');
        }

        $name = $this->getFullName($appointment);
        $email = $this->getUniqueEmail($appointment);
        $randomPassword = Str::random(6);
        $message = Config::get('messages.appointment_approved') . "\n \n Username: $email \n Password: $randomPassword";

        try {

            $this->createUserAndSendNotification($name, $email, $randomPassword, $appointment->phone_number, $message);

            $appointment->status = 'approved';

            $appointment->save();

            return redirect()->back()->with('success', 'Appointment accepted!');


        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Opps! Something went wrong. ' . $e->getMessage());
        }
    }

    /**
     * @param object $appointment
     * @return string
     */
    private function getName($appointment) {

       return $appointment->first_name . ' ' . $appointment->last_name;
    }

    /**
     * create user and send sms notification
     *
     * @param string $name
     * @param string $email
     * @param string $password
     * @param string $phoneNumber
     * @param string $message
     * @return void
     */
    private function createUserAndSendNotification($name, $email, $password, $phoneNumber, $message) {

        $user = new User;
        $user->createUser($name, $email, 2, $password);
        $this->sendMessageNotification(env('SMS_API_KEY'), $phoneNumber, $message, env('SMS_SENDER_NAME'));
    }

    /**
     * Get combination email
     *
     * @param object $appointment
     * @return string $uniqueEmail
     */
    private function getUniqueEmail($appointment) {

        $fname      =   substr($appointment->first_name, 0, 1);
        $mname      =   substr($appointment->middle_name, 0, 1);
        $lname      =   $appointment->last_name;
        $birthdate  =   explode('-', $appointment->birth_date);

        [$day, $month, $year] = [$birthdate[1], $birthdate[2], substr($birthdate[0], -2)];

        return $fname . $mname . $lname . $day . $month . $year;
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
