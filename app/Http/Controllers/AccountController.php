<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{

    public function showAll()
    {
        return response()->json(Account::all());
    }

    public function show($id)
    {
        return response()->json(Account::find($id));
    }

    public function create(Request $request)
    {
        $request['password'] = md5($request['password']);

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
        $request['password'] = md5($request['password']);
        
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