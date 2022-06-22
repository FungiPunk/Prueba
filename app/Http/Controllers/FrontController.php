<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrusel;
use App\Models\Proyecto;

class FrontController extends Controller
{
    public function index(){
        $carrusel = Carrusel::orderBy('orden','asc')->get();
        return view('welcome',compact('carrusel'));
    }
    public function contacto(){
     
        return view('contacto');
    }
    public function nosotros(){
     
        return view('nosotros');
    }
    public function proyectosV(){
        $proyectos = Proyecto::all();
        return view('proyectosV',compact('proyectos'));
    }
}
