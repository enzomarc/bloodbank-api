<?php

namespace App\Http\Controllers;

use App\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{

    public function showAll()
    {
        return response()->json(Purchase::all());
    }

    public function show($id)
    {
        return response()->json(Purchase::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'ref_hospital' => 'required',
            'bloodgroup' => 'required',
            'date' => 'required',
            'units' => 'required',
            'price' => 'required',
        ]);

        $purchase = Purchase::create($request->all());

        return response()->json($purchase, 201);
    }

    public function update($id, Request $request)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->update($request->all());

        return response()->json($purchase, 200);
    }

    public function delete($id)
    {
        Purchase::findOrFail($id)->delete();

        return response()->json('Deleted Successfully', 200);
    }

}