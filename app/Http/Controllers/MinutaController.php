<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Minuta;
use PDF;

class MinutaController extends Controller
{
    public function index()
    {
        $minutas = Minuta::all();
        return view('minutas.index', compact('minutas'));
    }

    public function create()
    {
        return view('minutas.create');
    }
    
    public function downloadPdf(Minuta $id)
    {
        $minutas = Minuta::all();
        $minuta = $minutas->find($id);
        //$minutas = Minuta::find($id);

        view()->share('minutas.pdf',$minutas);

        $pdf = PDF::loadView('minutas.pdf', compact('minuta'))->setPaper('a4');

        return $pdf->download('Minuta.pdf');
    }

    public function store(Request $request)
    {
        $minutas = new Minuta();
        $minutas->fecha = $request->get('fecha');
        $minutas->lugar = $request->get('lugar');
        $minutas->de = $request->get('de');
        $minutas->para = $request->get('para');
        $minutas->asunto = $request->get('asunto');
        $minutas->saludo = $request->get('saludo');
        $minutas->lista = $request->get('lista');
        $minutas->agenda = $request->get('agenda');
        $minutas->temas = $request->get('temas');
        $minutas->acuerdos = $request->get('acuerdos');
        $minutas->acciones = $request->get('acciones');
        $minutas->firma = $request->get('firma');

        $minutas->save();

        return redirect('/minutas');
    }

    public function show($id)
    {
      //
    }

    public function edit(Minuta $minuta)
    {
        return view('minutas.edit', compact('minuta'));
    }

    public function update(Request $request, $id)
    {
        $minuta = Minuta::find($id);
        $minuta->fecha = $request->get('fecha');
        $minuta->lugar = $request->get('lugar');
        $minuta->de = $request->get('de');
        $minuta->para = $request->get('para');
        $minuta->asunto = $request->get('asunto');
        $minuta->saludo = $request->get('saludo');
        $minuta->lista = $request->get('lista');
        $minuta->agenda = $request->get('agenda');
        $minuta->temas = $request->get('temas');
        $minuta->acuerdos = $request->get('acuerdos');
        $minuta->acciones = $request->get('acciones');
        $minuta->firma = $request->get('firma');

        $minuta->save();
        return redirect('/minutas');
    }

    public function destroy(Minuta $minuta)
    {
        $minuta->delete();
        return redirect()->route('minutas.index');
    }
}