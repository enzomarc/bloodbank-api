<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function showAll()
    {
        return response()->json(User::all());
    }

    public function show($id)
    {
        return response()->json(User::find($id));
    }

    public function create(Request $request)
    {
        $request['password'] = md5($request['password']);

        $this->validate($request, [
            'name' => 'required|min:6',
            'bloodgroup' => 'required',
        ]);

        $user = User::create($request->all());

        return response()->json($donation, 201);
    }

    public function update($id, Request $request)
    {
        $request['password'] = md5($request['password']);
        
        $donation = User::findOrFail($id);
        $donation->update($request->all());

        return response()->json($donation, 200);
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();

        return response()->json('Deleted Successfully', 200);
    }

}