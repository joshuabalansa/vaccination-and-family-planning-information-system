<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {

        $this->authorize('viewGeneral', \App\Models\Patient::class);

        return view('admin.general.index');
    }
}
