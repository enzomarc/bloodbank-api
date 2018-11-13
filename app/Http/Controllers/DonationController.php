<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{

    public function showAll()
    {
        return response()->json(Donation::all());
    }

    public function show($id)
    {
        return response()->json(Donation::find($id));
    }

    public function create(Request $request)
    {
        $request['password'] = md5($request['password']);

        $this->validate($request, [
            'id_user' => 'required',
            'ref_hospital' => 'required',
            'donation_date' => 'required',
            'unit' => 'required',
        ]);

        $donation = Donation::create($request->all());

        return response()->json($donation, 201);
    }

    public function update($id, Request $request)
    {
        $donation = Donation::findOrFail($id);
        $donation->update($request->all());

        return response()->json($donation, 200);
    }

    public function delete($id)
    {
        Donation::findOrFail($id)->delete();

        return response()->json('Deleted Successfully', 200);
    }

}