<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function index()
    {
        $propietarios=propietarios::all();
        return view('propietarios.index',compact('propietarios'));
    }
    public function create(){
        return view('propietarios.create');
    }
    public function store(Request $request){
        $propietarios=propietarios::create($request->all());
        return redirect()->route('propietarios.index');
    }
    public function show($id){
        $propietarios=propietarios::find($id);
        return view('propietarios.show',compact('propietarios'));
    }

    public function edit($id){
        $propietarios=propietarios::find($id);
        return view('propietarios.edit',compact('propietarios'));
    }

    public function update(Request  $request, $id){
        $propietarios=propietarios::find($id)->update($request->all());
        return redirect()->route('propietarios.index');

    }
    public function destroy($id){
        $propietarios=propietarios::find($id)->delete();
        return redirect()->route('propietarios.index');
    }
}
