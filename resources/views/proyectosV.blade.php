@extends('layouts.appfront')

@section('content')

<div class="container bg-danger pb-5">
            <div class="col-sm-12">
                <h1 class="text-center font-weight-bold text-white mt-4 font-italic">PROYECTOS</h1>
            </div>
        <div class="col-sm-12 p-5 mb-5 bg-white">
            <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table id="tabla" class="table table-bordered table-hover table-cell-border" style="width:100%">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th scope="col">Titulo</th>   
                                            <th scope="col">Autor</th>  
                                            <th scope="col">Departamento</th>
                                            <th scope="col">Nombre del proyecto</th> 
                                            <th scope="col">Ver Documento</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($proyectos as $proyecto)
                                        <tr>
                                                <td>{{$proyecto->titulo}}</td>
                                                <td>{{$proyecto->autor}}</td>
                                                <td>{{$proyecto->departamento}}</td>
                                                <td>{{$proyecto->pdf}}</td> 
                                                <td><a class="btn btn-dark" href="{{$proyecto->pdf}}" target="blank_">Ver Documento</a></td>   
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
</div>

@endsection
