<?php

namespace App\Http\Controllers;

use App\Models\County;
use Illuminate\Http\Request;

class CountyController extends Controller
{
    public function index()
    {
        return County::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:counties',
        ]);

        return County::create($request->all());
    }

    public function show($id)
    {
        return County::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $county = County::findOrFail($id);

        $request->validate([
            'name' => 'sometimes|required|string|unique:counties,name,' . $county->id,
        ]);

        $county->update($request->all());
        return $county;
    }

    public function destroy($id)
    {
        $county = County::findOrFail($id);
        $county->delete();
        return response()->noContent();
    }
};
