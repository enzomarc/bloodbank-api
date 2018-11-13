<?php

namespace App\Http\Controllers;

use App\HospitalRequest;
use Illuminate\Http\Request;

class HospitalRequestController extends Controller
{

    public function showAll()
    {
        return response()->json(HospitalRequest::all());
    }

    public function show($id)
    {
        return response()->json(HospitalRequest::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'bloodgroup' => 'required',
            'date' => 'required',
            'unit' => 'required',
        ]);

        $hospital_request = HospitalRequest::create($request->all());

        return response()->json($hospital_request, 201);
    }

    public function update($id, Request $request)
    {
        $hospital_request = HospitalRequest::findOrFail($id);
        $hospital_request->update($request->all());

        return response()->json($hospital_request, 200);
    }

    public function delete($id)
    {
        HospitalRequest::findOrFail($id)->delete();

        return response()->json('Deleted Successfully', 200);
    }

}