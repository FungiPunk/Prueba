<?php

namespace App\Http\Controllers;

require 'vendor/autoload.php';

use Illuminate\Http\Request;
use App\Models\Proyecto;
use AWS\S3\S3CLient;
use AWS\S3\Exception\S3Exception;


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
        $proyectos = new Proyecto();
        $proyectos->titulo = $request->get('titulo');
        $proyectos->fecha = $request->get('fecha');
        $proyectos->autor = $request->get('autor');
        $proyectos->departamento = $request->get('departamento');
        if($request->hasFile('pdf')){
            $archivo=$request->file('pdf');
            $archivo->move(public_path().'/Archivo/',$archivo->getClientOriginalName());
            $proyectos->pdf=$archivo->getClientOriginalName();

            try{
                if (!file_exists('/tmp/tmpfile')){
                    mkdir('/tmp/tmpfile');
                }

                $tempFilePath = '/tmp/tmpfile' . basename($archivo->getClientOriginalName());
                $tempFile = fopen($tempFilePath, "w") or die("Error: Unable to open file.");
                $fileContents = file_get_contents($archivo->getClientOriginalName());
                $tempFile = file_put_contents($tempFilePath, $fileContents);
                
                $s3->putObject([
                    'Bucket' => 'difusiontec-bucket',
                    'Key' => 'documents/' . $archivo->getClientOriginalName(),
                    'SourceFile' => $tempFilePath,
                    'StorageClass' => 'REDUCED_REDUNDACY'
                ]);

            } catch(S3Exception $e){
                echo $e->getMessage();
            }

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