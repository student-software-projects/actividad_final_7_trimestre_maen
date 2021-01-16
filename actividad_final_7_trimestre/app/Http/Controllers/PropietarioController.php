<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propietario;

class PropietarioController extends Controller
{
    public function index()
    {
        $propietarios=propietario::all();
        return view('propietario.index',compact('propietarios'));
    }
    public function create(){
        return view('propietario.create');
    }
    public function store(Request $request){
        $Propietario=propietario::create($request->all());
        return redirect()->route('propietario.index');
    }
    public function show($id){
        $propietario=propietario::find($id);
        return view('propietario.show',compact('propietario'));
    }

    public function edit($id){
        $propietario=propietario::find($id);
        return view('propietario.edit',compact('propietario'));
    }

    public function update(Request  $request, $id){
        $propietario=propietario::find($id)->update($request->all());
        return redirect()->route('propietario.index');

    }
    public function destroy($id){
        $propietario=propietario::find($id)->delete();
        return redirect()->route('propietario.index');
    }
}
