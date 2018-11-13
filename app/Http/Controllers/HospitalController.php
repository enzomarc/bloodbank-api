<?php

namespace App\Http\Controllers;

use App\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{

    public function showAll()
    {
        return response()->json(Hospital::all());
    }

    public function show($ref)
    {
        return response()->json(Hospital::find($ref));
    }

    public function create(Request $request)
    {
        $request['password'] = md5($request['password']);

        $this->validate($request, [
            'ref_hospital' => 'required|unique:hospitals',
            'hospital_name' => 'required|unique:hospitals',
            'hospital_city' => 'required',
            'password' => 'required',
        ]);

        $hospital = Hospital::create($request->all());

        return response()->json($hospital, 201);
    }

    public function update($ref, Request $request)
    {
        $request['password'] = md5($request['password']);
        
        $hospital = Hospital::findOrFail($ref);
        $hospital->update($request->all());

        return response()->json($hospital, 200);
    }

    public function delete($ref)
    {
        Hospital::findOrFail($ref)->delete();

        return response()->json('Deleted Successfully', 200);
    }

}