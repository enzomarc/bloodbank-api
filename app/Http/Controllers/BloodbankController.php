<?php

namespace App\Http\Controllers;

use App\Bloodbank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BloodbankController extends Controller
{

    public function showAll()
    {
        return response()->json(Bloodbank::all());
    }

    public function showBloodbank($ref)
    {
        return response()->json(Bloodbank::find($ref));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'ref_hospital' => 'required',
            'username' => 'required|unique:accounts',
            'password' => 'required',
            'account_type' => 'required'
        ]);

        $account = Account::create($request->all());

        return response()->json($account, 201);
    }

    public function update($id, Request $request)
    {
        $account = Account::findOrFail($id);
        $account->update($request->all());

        return response()->json($account, 200);
    }

    public function delete($id)
    {
        Account::findOrFail($id)->delete();

        return response()->json('Deleted Successfully', 200);
    }

}