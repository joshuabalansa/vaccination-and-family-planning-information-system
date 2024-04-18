<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'birth_date',
        'body_weight',
        'body_length',
        'address',
        'gravida',
        'para',
        'abortion',
        'live_birth',
        'death',
        'philhealth',
        '4ps_number',
        'mother_maiden_name',
        'mother_birth_date',
        'mother_age',
        'mother_occupation',
        'father_name',
        'father_birth_date',
        'father_age',
        'father_occupation',
        'phone_number',
        'appointment_time',
        'appointment_date',
    ];

    public function user() {

        return $this->belongsTo('App\User');
    }
    
    /**
     * get name function
     *
     * @return string
     */
    public function getName() {

      return  ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }

    /**
     * get age function
     *
     * @return string
     */
    public function getAge() {

        return  $this->age;
    }

    /**
     * get phone function
     *
     * @return string
     */
    public function getPhone() {

        return  $this->phone_number;
    }

    /**
     * get addresses function
     *
     * @return string
     */
    public function getAddresses() {

        return  $this->address;
    }


     /**
     * get date and time function
     * @param string $dateTime get date or time
     * @return string
     */
    public function getDateTime($dateTime) {

        $time = Carbon::parse($this->time);
        $formattedTime = $time->format("h:i:s A");

        return  $dateTime === 'date' ? $this->date : $formattedTime;
    }

    /**
     * get vaccine_center function
     *
     * @return string
     */
    public function getVaccineCenter() {

        return  $this->vaccine_center;
    }

    /**
     * get appointment status
     * @return string
     */
    public function getStatus() {

        return ucfirst($this->status);
    }

    
}