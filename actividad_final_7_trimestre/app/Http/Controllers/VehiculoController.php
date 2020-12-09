<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos=vehiculos::all();
        return view('vehiculos.index',compact('vehiculos'));
    }
    public function create(){
        return view('vehiculos.create');
    }
    public function store(Request $request){
        $vehiculos=vehiculos::create($request->all());
        return redirect()->route('vehiculos.index');
    }
    public function show($id){
        $vehiculos=vehiculos::find($id);
        return view('vehiculos.show',compact('vehiculos'));
    }

    public function edit($id){
        $vehiculos=vehiculos::find($id);
        return view('vehiculos.edit',compact('vehiculos'));
    }

    public function update(Request  $request, $id){
        $vehiculos=vehiculos::find($id)->update($request->all());
        return redirect()->route('vehiculos.index');

    }
    public function destroy($id){
        $vehiculos=vehiculos::find($id)->delete();
        return redirect()->route('vehiculos.index');
    }
}
