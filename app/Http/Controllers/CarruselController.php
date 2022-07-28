<?php

namespace App\Http\Controllers;

require '/var/www/proyecto/Prueba/vendor/autoload.php';

use Illuminate\Http\Request;
use App\Models\Carrusel;
use Image;
use AWS\S3\S3CLient;
use AWS\S3\Exception\S3Exception;

class CarruselController extends Controller
{
 
    public function index()
    {
        $carrusels = Carrusel::all();
        return view("carrusel.index",compact('carrusels'));
    }

  
    public function create()
    {
        return view('carrusel.create');
    }

 
    public function store(Request $request)
    {
        $carrusel = new Carrusel($request->all());
        
        if($request->hasFile('urlfoto')){

            $imagen = $request->file('urlfoto');
            $nuevonombre = time()."_".$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200,450,function($constraint){ $constraint->upsize();  })
            ->save('/Carruselfotos/'.$nuevonombre);

            $carrusel->urlfoto = $nuevonombre;

            try{
                    if (!file_exists('/tmp/tmpfile')){
                        mkdir('/tmp/tmpfile');
                    }

                    $tempFilePath = '/tmp/tmpfile' . basename($nuevonombre->getRealPath());
                    $tempFile = fopen($tempFilePath, "w") or die("Error: Unable to open file.");
                    $fileContents = file_get_contents($nuevonombre->getRealPath());
                    $tempFile = file_put_contents($tempFilePath, $fileContents);
                    
                    $s3->putObject([
                        'Bucket' => 'difusiontec-bucket',
                        'Key' => 'images/' . $nuevonombre,
                        'SourceFile' => $tempFilePath,
                        'StorageClass' => 'REDUCED_REDUNDACY'
                    ]);

            } catch(S3Exception $e){
                echo $e->getMessage();
            }

        }
        $carrusel->save();
        return redirect('/carrusel');   
    }
  
    public function edit(Carrusel $carrusel)
    {
        return view('carrusel.edit',compact('carrusel'));
    }

   
    public function update(Request $request, $id)
    {
        $carrusel = Carrusel::find($id);
        $carrusel->fill($request->all());
        $foto_anterior=$carrusel->urlfoto;

        if($request->hasFile('urlfoto')){

            $rutaAnterior = public_path('/Carruselfotos/'.$foto_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }

            $imagen = $request->file('urlfoto');
            
            $nuevonombre = time()."_".$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200,450,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/Carruselfotos/'.$nuevonombre));

            $carrusel->urlfoto = $nuevonombre;
        }
       
        $carrusel->save();
        return redirect('/carrusel');

    }

   
    public function destroy(Carrusel $carrusel)
    {
        $carrusel->delete();
        return redirect()->route('carrusel.index');
    }
}