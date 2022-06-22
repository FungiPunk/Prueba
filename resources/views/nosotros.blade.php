@extends('layouts.appfront')

@section('content')

<div class="container bg-danger pb-7">
            <div class="col-sm-12">
                <h1 class="text-center font-weight-bold text-white mt-4 font-italic">NOSOTROS</h1>
            </div>
        <div class="col-sm-12 p-5 mb-5 bg-white">
           <h2 class="text-danger font-weight-bold">QUIENES SOMOS</h2>
            <b>A través de esta red, se han desarrollado proyectos que han permitido desarrollar trabajos de Tesis a nivel Licenciatura y Maestría con el intercambio de Investigadores como miembros de los comités de revisión, generando a la vez producción académica como Artículos de Difusión, Artículos Arbitrados, Artículos Indizados, Patentes, Derechos de Autor, etcétera. </b>
            <b>A través de los años, se han recibido muchas solicitudes de inclusión, sin embargo, a la fecha solo se han admitido 5 grupos de investigación adicionales:</b>
            <li><b>Conocimiento, Transferencia y Emprendimiento,</b> Universidad Autónoma del Estado de México, Campus Ecatepec.</li>
            <li><b>Creatividad Computacional,</b> Tecnológico Nacional de México/I.T. de Ciudad Juárez.</li>
            <li><b>Adquisición y Representación del Conocimiento-Sistemas Expertos y Simulación (ARCO SES).</b>  Universidad Distrital José de Caldas, Bogotá, Colombia.</li>
            <li><b>Investigación en Ingenierías (GIIS).</b> Fundación Universitaria Compensar, Bogotá, Colombia.</li>
            <li><b>Tecnología y Salud.</b> Centro Universitario de Patos de Minas, Patos de Minas, Brasil.</li>
            <div class="row mt-5 mb-5 align-items-center">
                <div class="col-sm-4">
                    <img src={{URL::asset('Fotos/MISION.jpg')}} class="img-fluid">
                </div>
                <div class="col-sm-8">
                    <h2 class="text-danger font-weight-bold">MISIÓN</h2>
                    <b>Formar profesionistas en educación superior tecnológica de calidad, capaces de contribuir a la ciencia, tecnología e investigación con un enfoque creativo e innovador, mediante una educación integral basada en competencias para el desarrollo sustentable de una sociedad incluyente, globalizada, equitativa y humana.</b>
                </div>
            </div>

            <div class="row mt-5 mb-5 align-items-center">      
                <div class="col-sm-8">
                    <h2  class="text-danger font-weight-bold">VISIÓN</h2>
                    <b>Ser una institución de alto desempeño en educación superior tecnológica, que forme profesionales e investigadores que contribuyan al desarrollo sostenido, sustentable y equitativo de la sociedad.
                    Con esta visión el Instituto Tecnológico de Ciudad Juárez busca contribuir a la transformación educativa en México, orientando sus esfuerzos hacia el desarrollo humano sustentable y la competitividad.</b>
                </div>
                <div class="col-sm-4">
                    <img src={{URL::asset('Fotos/VISION.jpg')}} class="img-fluid">
                </div>
            </div>

            <div class="row mt-5 mb-5 align-items-center">
                <div class="col-sm-4">
                    <img src={{URL::asset('Fotos/VISION.png')}} class="img-fluid">
                </div>
                <div class="col-sm-8">
                   <h2 class="text-danger font-weight-bold">ORIGEN DE LA RED TEMATICA</h2>
                   <b>Esta Red se conformó inicialmente, en el año 2011, por los cuerpos académicos del Instituto Tecnológico de Ciudad Juárez, la Universidad Autónoma de Ciudad Juárez, ambas instituciones ubicadas en Ciudad Juárez, Chihuahua, México y por los cuerpos académicos del Instituto Tecnológico de Tuxtla Gutiérrez y de la Universidad Autónoma del Estado de Chiapas, en la ciudad de Tuxtla Gutiérrez, Chiapas, México. Las características más importantes de esta red son, entre otras:</b>
                   <li>Es una red integrada por colaboración, esto es, los cuerpos académicos acuerdan trabajar conjuntamente en proyectos de desarrollo, innovación y generación de nuevo conocimiento</li>
                   <li>Entre otros, el trabajo conjunto de la Red se enfoca, principalmente en:</li> 
                    
                   <b>La generación de proyectos regionales e internacionales al contar con investigadores en distintos puntos del país y de Latinoamérica.</b>
                   <li>La generación de producción académica con carácter regional e internacional.</li> 
                   <li>La generación de proyectos del tipo transversal.</li> 
                   <li>Un enriquecimiento del conocimiento al incluir en los proyectos distintos órdenes sociales y tecnológicos.</li> 
                </div>
            </div>

            <div class="row mt-5 mb-5 align-items-center">            
                <div class="col-sm-8">
                    <h2 class="text-danger font-weight-bold">VALORES</h2>
                    <li><b>Ser humano</b></li>    
                    <li><b>Espíritu de servicio</b></li>
                    <li><b>Liderazgo</b></li>
                    <li><b>Desarrollo sostenido y sustentable</b></li>
                    <li><b>Alto desempeño</b></li>
                    <li><b>Calidad</b></li>
                    <li><b>Trabajo en equipo</b></li>
                    <li><b>Responsabilidad</b></li>
                    <li><b>Compromiso</b></li>
                </div>
                <div class="col-sm-4">
                    <img src={{URL::asset('Fotos/VALORES.png')}} class="img-fluid">
                </div>
            </div>
        </div>  
</div>
@endsection