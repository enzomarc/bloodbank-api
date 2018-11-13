<?php

namespace App\Http\Controllers;

use App\Bloodbank;
use Illuminate\Http\Request;

class BloodbankController extends Controller
{

    public function showAll()
    {
        return response()->json(Bloodbank::all());
    }

    public function show($ref)
    {
        return response()->json(Bloodbank::find($ref));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'ref_hospital' => 'required'
        ]);

        $bloodbank = Bloodbank::create($request->all());

        return response()->json($bloodbank, 201);
    }

    public function update($ref, Request $request)
    {
        $bloodbank = Bloodbank::findOrFail($ref);
        $bloodbank->update($request->all());

        return response()->json($bloodbank, 200);
    }

    public function delete($ref)
    {
        Bloodbank::findOrFail($ref)->delete();

        return response()->json('Deleted Successfully', 200);
    }

}