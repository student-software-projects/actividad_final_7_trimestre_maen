<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios=usuarios::all();
        return view('usuario.index',compact('usuarios'));
    }
    public function create(){
        return view('usuario.create');
    }
    public function store(Request $request){
        $usuarios=usuarios::create($request->all());
        return redirect()->route('usuario.index');
    }
    public function show($id){
        $usuarios=usuarios::find($id);
        return view('usuario.show',compact('usuarios'));
    }

    public function edit($id){
        $usuarios=usuarios::find($id);
        return view('usuario.edit',compact('usuarios'));
    }

    public function update(Request  $request, $id){
        $usuarios=usuarios::find($id)->update($request->all());
        return redirect()->route('usuario.index');

    }
    public function destroy($id){
        $usuarios=usuarios::find($id)->delete();
        return redirect()->route('usuario.index');
    }
}
