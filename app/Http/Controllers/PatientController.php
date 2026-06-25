<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(Request $request)
{
    $search = $request->search;

    $patients = Patient::where('name', 'LIKE', "%$search%")->get();

    return view('patients.index', compact('patients'));
}
    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'age' => 'required|integer|min:1|max:120',
        'gender' => 'required',
        'phone' => 'required|digits:10',
        'blood_group' => 'required',
        'disease' => 'required',
    ]);

    Patient::create($request->all());

    return redirect('/patients')
        ->with('success','Patient Added Successfully');
}
    public function edit(Patient $patient)
{
    return view('patients.edit', compact('patient'));
}

public function update(Request $request, Patient $patient)
{
    $request->validate([
        'name' => 'required',
        'age' => 'required|integer',
        'gender' => 'required',
        'phone' => 'required',
        'blood_group' => 'required',
        'disease' => 'required',
    ]);

    $patient->update($request->all());

    return redirect('/patients')->with('success', 'Patient updated successfully!');
}
public function destroy(Patient $patient)
{
    $patient->delete();

    return redirect('/patients');
}
}