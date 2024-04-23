<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    /**
     * View schedule function
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        return view('patient.schedule.index');
    }
}
