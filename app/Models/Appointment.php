<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'age',
        'allergic_reaction',
        'phone',
        'street',
        'city',
        'brgy',
        'zipcode',
        'date',
        'time',
        'vaccine_type',
        'vaccine_center',
    ];

    /**
     * get name function
     *
     * @return string
     */
    public function getName() {

      return  ucfirst($this->firstname) . ' ' . ucfirst($this->lastname);
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

        return  $this->age;
    }

    /**
     * get addresses function
     *
     * @return string
     */
    public function getAddresses() {

        return  $this->street . ' ' . $this->brgy . ' ' . $this->city;
    }

     /**
     * get alllergic_reaction function
     *
     * @return string
     */
    public function getAllergicReaction() {

        return  $this->allergic_reaction;
    }


     /**
     * get date and time function
     *
     * @return string
     */
    public function getDateTime($dateTime) {

        $time = Carbon::parse($this->time);
        $formattedTime = $time->format("h:i:s A");

        return  $dateTime === 'date' ? $this->date : $formattedTime;
    }

    /**
     * get vaccine_type function
     *
     * @return string
     */
    public function getVaccineType() {

        return  $this->vaccine_type;
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