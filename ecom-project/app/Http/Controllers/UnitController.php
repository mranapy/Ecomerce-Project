<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        return view('admin.unit.index',['units'=>Unit::all()]);
    }
    public function create()
    {
        return view('admin.unit.create');
    }
    public function store(Request $request)
    {
        Unit::newUnit($request);
        return back()->with('message', 'Create new Unit Successfully');
    }
    public function edit($id)
    {
        return view('admin.unit.edit',['unit'=>Unit::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Unit::updateUnit($request, $id);
        return redirect('/unit')->with('message','Unit Update Successfully');
    }
    public function destroy($id)
    {
        Unit::deleteUnit($id);
        return back()->with('message','Unit Delete Successfully');
    }


}
