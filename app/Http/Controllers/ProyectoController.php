<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
Use Storage;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('proyectos.create');
    }

    public function store(Request $request)
    {
        $proyectos = new Proyecto($request->all());
        //$proyectos->titulo = $request->get('titulo');
        //$proyectos->fecha = $request->get('fecha');
        //$proyectos->autor = $request->get('autor');
        //$proyectos->departamento = $request->get('departamento');
        if($request->hasFile('pdf')){
            //$archivo=$request->file('pdf');
            //$archivo->move(public_path().'/Archivo/',$archivo->getClientOriginalName());
            //$proyectos->pdf=$archivo->getClientOriginalName();

           $path = $request->file('pdf')->store('documents', 's3');
	   $url = Storage::disk('s3')->url($path);
	   $proyectos->pdf = $url;
        }
        $proyectos->save();
        return redirect('/proyectos');
    }

    public function show($id)
    {
        //
    }

    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.edit', compact('proyecto'));
    }

    public function update(Request $request, $id)
    {
        $proyecto = Proyecto::find($id);
        $proyecto->titulo = $request->get('titulo');
        $proyecto->fecha = $request->get('fecha');
        $proyecto->autor = $request->get('autor');
        $proyecto->departamento = $request->get('departamento');
        if($request->hasFile('pdf')){
            $archivo=$request->file('pdf');
            $archivo->move(public_path().'/Archivo/',$archivo->getClientOriginalName());
            $proyecto->pdf=$archivo->getClientOriginalName();
        }
        $proyecto->save();
        return redirect('/proyectos');
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('proyectos.index');
    }
}
