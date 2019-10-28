<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;

class RegionController extends Controller
{
    public function index()
    {
        $region = Region::all();
        return response()->json($region, 200);
    }

    public function create(Request $request)
    {
        $region = new Region($request->all());
        $region->save();
        return response()->json($region, 200);
    }

    public function store()
    {
    }

    public function show($id)
    {
        $region = Region::find($id);
        return response()->json($region, 200);
    }

    public function edit()
    {

    }

    public function update(Request $request, $id)
    {
        $region = Region::find($id);
        $region->region = $request->region;
        $region->save();
        return response()->json($region, 200);
    }

    public function destroy($id)
    {
        $region = Region::find($id);
        $region->delete();
        return response()->json($region, 200);
    }
}