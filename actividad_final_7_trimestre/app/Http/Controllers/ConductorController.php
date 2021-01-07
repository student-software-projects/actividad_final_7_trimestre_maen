<?php
namespace App\Http\Controllers;
use App\Models\Conductores;
use Illuminate\Http\Request;

class ConductorController extends Controller
{
    public function index()
    {
        $conductores=Conductores::all();
        return view('conductor.index',compact('conductores'));
    }
    public function create(){
        return view('conductores.create');
    }
    public function store(Request $request){
        $conductores=Conductores::create($request->all());
        return redirect()->route('conductores.index');
    }
    public function show($id){
        $conductores=Conductores::find($id);
        return view('conductores.show',compact('conductores'));
    }
    public function edit($id){
        $conductores=Conductores::find($id);
        return view('conductores.edit',compact('conductores'));
    }

    public function update(Request  $request, $id){
        $conductores=Conductores::find($id)->update($request->all());
        return redirect()->route('rol.index');

    }
    public function destroy($id){
        $conductores=Conductores::find($id)->delete();
        return redirect()->route('rol.index');
    }
}
