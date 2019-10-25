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
        print($request->all());
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
        $region->name = $request->name;
        $region->description = $request->description;
        $region->price = $request->price;
        $region->stock = $request->stock;
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