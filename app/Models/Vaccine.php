<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = [
        'vaccine',
        'abbreviation',
        'manufacturer',
        'doses',
        'approved_ages',
        'description',
        'status'
    ];

    /**
     * get vaccine name
     * 
     * @return string
     */
    public function getVaccine()
    {

        return ucfirst($this->vaccine);
    }

    /**
     * get abbreviation
     * 
     * @return string
     */
    public function getAbbreviation()
    {

        return strtoupper($this->abbreviation);
    }

    /**
     * get manufacturer
     * 
     * @return string
     */
    public function getManufacturer()
    {

        return ucfirst($this->manufacturer);
    }

    /**
     * get doses
     * 
     * @return int
     */
    public function getDoses()
    {

        return $this->doses;
    }

    /**
     * @return string
     */
    public function getApprovedAges()
    {

        return $this->approved_ages;
    }

    /**
     * get description
     * 
     * @return string
     */
    public function getDescription()
    {

        return $this->description;
    }

    /**
     * get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
