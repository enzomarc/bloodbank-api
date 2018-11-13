<?php

namespace App\Http\Controllers;

use App\Request as BloodRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{

    public function showAll()
    {
        return response()->json(BloodRequest::all());
    }

    public function show($id)
    {
        return response()->json(BloodRequest::find($id));
    }

    public function create(Request $request)
    {
        $request['password'] = md5($request['password']);

        $this->validate($request, [
            'id_user' => 'required',
            'ref_hospital' => 'required',
            'request_date' => 'required',
            'unit' => 'required',
        ]);

        $_request = BloodRequest::create($request->all());

        return response()->json($_request, 201);
    }

    public function update($id, Request $request)
    {
        $_request = BloodRequest::findOrFail($id);
        $_request->update($request->all());

        return response()->json($_request, 200);
    }

    public function delete($id)
    {
        BloodRequest::findOrFail($id)->delete();

        return response()->json('Deleted Successfully', 200);
    }

}