<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConductorController extends Controller
{
    public function index()
    {
        $conductores=conductores::all();
        return view('conductores.index',compact('conductores'));
    }
    public function create(){
        return view('conductores.create');
    }
    public function store(Request $request){
        $conductores=conductores::create($request->all());
        return redirect()->route('conductores.index');
    }
    public function show($id){
        $conductores=conductores::find($id);
        return view('conductores.show',compact('conductores'));
    }

    public function edit($id){
        $conductores=conductores::find($id);
        return view('conductores.edit',compact('conductores'));
    }

    public function update(Request  $request, $id){
        $conductores=conductores::find($id)->update($request->all());
        return redirect()->route('conductores.index');

    }
    public function destroy($id){
        $conductores=conductores::find($id)->delete();
        return redirect()->route('conductores.index');
    }
}
