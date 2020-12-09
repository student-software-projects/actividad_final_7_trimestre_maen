<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios=usuarios::all();
        return view('usuarios.index',compact('usuarios'));
    }
    public function create(){
        return view('usuarios.create');
    }
    public function store(Request $request){
        $usuarios=usuarios::create($request->all());
        return redirect()->route('usuarios.index');
    }
    public function show($id){
        $usuarios=usuarios::find($id);
        return view('usuarios.show',compact('usuarios'));
    }

    public function edit($id){
        $usuarios=usuarios::find($id);
        return view('usuarios.edit',compact('usuarios'));
    }

    public function update(Request  $request, $id){
        $usuarios=usuarios::find($id)->update($request->all());
        return redirect()->route('usuarios.index');

    }
    public function destroy($id){
        $usuarios=usuarios::find($id)->delete();
        return redirect()->route('usuarios.index');
    }
}
