<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view index

        $pasien = Patient::all();

        return view('dashboard.patient.index', [
            'title'         => 'Pasien | Klinik Gigi',
            'menu'          => 'patient',
            'header_bar'    => 'Pasien',
            'patient'       => $pasien
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view create

        return view('dashboard.patient.create', [
            'title'         => 'Add Pasien | Klinik Gigi',
            'menu'          => 'patient',
            'header_bar'    => 'Pasien'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // save new data

        $rules = [
            'name'          => 'required',
            'age'           => 'required|numeric',
            'gender'        => 'required',
            'address'       => 'required',
            'phone'         => 'required|numeric'
        ];

        $validatedData = $request->validate($rules);

        $validatedData['rm_number'] = time();


        Patient::create($validatedData);

        return redirect('/patient')->with('success', 'Patient has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        // return view show
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        // return view edit

        return view('dashboard.patient.edit', [
            'title'         => 'Edit Pasien | Klinik Gigi',
            'menu'          => 'patient',
            'header_bar'    => 'Pasien',
            'patient'       => $patient
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        // update data

        $rules = [
            'name'          => 'required',
            'age'           => 'required|numeric',
            'gender'        => 'required',
            'address'       => 'required',
            'phone'         => 'required|numeric'
        ];

        $validatedData = $request->validate($rules);

        Patient::where('id', $patient->id)
            ->update($validatedData);


        return redirect('/patient')->with('success', 'Patient has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        // delete data

        Patient::destroy($patient->id);

        return redirect('/patient')->with('success', 'Patient has been deleted');
    }
}
