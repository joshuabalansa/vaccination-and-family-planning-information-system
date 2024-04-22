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
     * @return \Illuminate\View\View;
     */
    public function create()
    {
        # field = label, type
        $fields = [
            'vaccine'       => ['Vaccine Name', 'text'],
            'abbreviation'  => ['Abbreviation', 'text'],
            'manufacturer'  => ['Manufacturer', 'text'],
            'doses'         => ['Doses', 'number'],
            'approved_ages' => ['Approved Ages', 'text'],
            'description'   => ['Description', 'text']
        ];

        return view('admin.vaccines.create', compact('fields'));
    }

    /**
     * Store a newly created resource in storage.
     * @param \App\Http\Requests\VaccineRequest $request
     * @return \Illuminate\Http\RedirectResponse
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
     * set status to archived function
     *
     * @param \App\Models\Vaccine $vaccine
     * @return void
     */
    public function archive(Vaccine $vaccine)
    {
        $archived = $vaccine->update(['status' => 'archived']);

        if ($archived) {

            return redirect()->back()->with('success', 'Vaccine has been archived successfully');
        }
    }

    /**
     * set status to available function
     *
     * @param \App\Models\Vaccine $vaccine
     * @return void
     */
    public function unArchive(Vaccine $vaccine)
    {
        $unArchived = $vaccine->update(['status' => 'available']);

        if ($unArchived) {

            return redirect()->back()->with('success', 'Vaccine has been unarchived successfully');
        }
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
