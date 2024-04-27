<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VaccinationController extends Controller
{
    /**
     * show all patient function
     *
     * @return void
     */
    public function index()
    {

        return view('admin.vaccination.index');
    }
}
