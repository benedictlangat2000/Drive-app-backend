<?php

namespace App\Http\Controllers;

use App\Models\SubCounty;
use Illuminate\Http\Request;

class SubCountyController extends Controller
{
    public function index()
    {
        return SubCounty::with('county')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:sub_counties',
            'county_id' => 'required|exists:counties,id',
        ]);

        return SubCounty::create($request->all());
    }

    public function show($id)
    {
        return SubCounty::with('county')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $subCounty = SubCounty::findOrFail($id);

        $request->validate([
            'name' => 'sometimes|required|string|unique:sub_counties,name,' . $subCounty->id,
            'county_id' => 'sometimes|required|exists:counties,id',
        ]);

        $subCounty->update($request->all());
        return $subCounty;
    }

    public function destroy($id)
    {
        $subCounty = SubCounty::findOrFail($id);
        $subCounty->delete();
        return response()->noContent();
    }
};
