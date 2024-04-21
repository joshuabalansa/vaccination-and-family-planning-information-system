<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VaccineRequest;
use App\Models\Vaccine;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vaccines = Vaccine::all();
        return view('admin.vaccines.index', compact('vaccines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $fields = [
            'vaccine' => 'Vaccine Name',
            'abbreviation' => 'Abbreviation',
            'manufacturer' => 'Manufacturer',
            'doses' => 'Doses',
            'approved_ages' => 'Approved Ages',
            'description' => 'Description'
        ];

        return view('admin.vaccines.create', compact('fields'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VaccineRequest $request)
    {
        try {
            $validatedData = $request->validated();

            $create = Vaccine::create($validatedData);

            if ($create) {
                return redirect()->route('vaccine.index')->with('success', 'Vaccine Added Successfully');
            }
        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Oops! Something went wrong. ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
