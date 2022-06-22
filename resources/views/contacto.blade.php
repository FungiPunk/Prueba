@extends('layouts.appfront')

@section('content')
<div class="container bg-danger pb-5">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center  font-weight-bold text-white mt-4 font-italic">CONTACTO</h1>
        </div>

        <div class="col-sm-8 bg-white p-5">
           <h2 class="text-center font-weight-bold">DATOS DE CONTACTO</h2>
                <ul>
                    <li><b>Dirección:</b> Av. Tecnológico No. 1340 Fracc. El Crucero C.P. 32500 Ciudad Juárez, Chih. México</li>
                    <li><b>Celular:</b> (656)688-2500</li>
                    <li><b>Departamento de Sistemas Computacionales</b> Ext. 2461</li>
                    <li><b>División de Estudios de Posgrado e Investigación</b> Ext. 2341</li>
                    <li><b>Departamento de Gestión Tecnológica y Vinculación</b> Ext. 2201</li>
                    <li><b>Email:</b>  webmaster@itcj.edu.mx </li>
                   <li><b><a target="blank_" href="{{ url("https://www.facebook.com/TecNMCampusCdJuarez") }}">Facebook TecNM</a></b></li>
                    
                </ul>
            <div style="center width: 40rem;">
			    <img src={{URL::asset('Logo/ITCJ.jpg')}} class="card-img-top">
            </div>
        </div> 
        <div class="col-sm-4 bg-light">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3393.8478013362947!2d-106.42355908484448!3d31.72005228130402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75dc249fd3e4b%3A0x58a769357165487b!2sTecnol%C3%B3gico%20Nacional%20de%20M%C3%A9xico%20Campus%20Cd.%20Ju%C3%A1rez!5e0!3m2!1ses!2smx!4v1642659461728!5m2!1ses!2smx" width="100%" class="vh-100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        
    </div>
</div>
@endsection