<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{

    public function showAll()
    {
        return response()->json(Sale::all());
    }

    public function show($id)
    {
        return response()->json(Sale::find($id));
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

        $sale = Sale::create($request->all());

        return response()->json($sale, 201);
    }

    public function update($id, Request $request)
    {
        $sale = Sale::findOrFail($id);
        $sale->update($request->all());

        return response()->json($sale, 200);
    }

    public function delete($id)
    {
        Sale::findOrFail($id)->delete();

        return response()->json('Deleted Successfully', 200);
    }

}