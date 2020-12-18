<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use Illuminate\Http\Request;

class ConductorController extends Controller
{
    public function index()
    {
        $conductores=conductor::all();
        return view('conductores.inicio',compact('conductores'));
    }
    public function create(){
        return view('conductores.create');
    }
    public function store(Request $request){
        conductor::create($request->all());
        return redirect()->route('conductores.inicio');
    }
    public function show($id){
        $conductor=conductor::find($id);
        return view('conductores.show',compact('conductores'));
    }

    public function edit($id){
        $conductor=conductor::find($id);
        return view('conductores.edit',compact('conductores'));
    }

    public function update(Request  $request, $id){
        $conductor=conductor::find($id)->update($request->all());
        return redirect()->route('conductores.inicio');

    }
    public function destroy($id){
        $conductor=conductor::find($id)->delete();
        return redirect()->route('conductores.inicio');
    }
}
