<?php

namespace App\Http\Controllers;
use App\Http\Requests;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequestPatient;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::paginate(5);
        return view('patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequestPatient $request)
    {
        
        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);
        // dd($request->request);
        // DB::insert('INSERT INTO patients (
        // first_name,
        // last_name,
        // gender,
        // nin, 
        // date_of_birth,
        // marital_status,
        // phone_number,
        // next_of_kin,
        // kin_phone_number,
        // relationship) VALUES (?,?,?,?,?,?,?,?,?,?)', $request->all());
         
        return redirect()->route('patients.index')
                        ->with('success','Patient created successfully.');

        
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $patient= Patient::findOrFail($id);
        // return view('patient.show', compact('patient'));

        $patient = DB::select('SELECT * FROM patient WHERE id =:id', ['id' => $id])->get();
        return view ('patient.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $patient= Patient::findOrFail($id);
        return view('patient.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
