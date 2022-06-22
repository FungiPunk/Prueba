<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            LISTA DE PROYECTOS
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
               <a href="proyectos/create" class="btn btn-primary">SUBIR PROYECTO</a>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table id="tabla" class="table table-bordered table-responsive table-hover table-cell-border" style="width:100%">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th scope="col">Titulo</th>  
                                        <th scope="col">Fecha</th>  
                                        <th scope="col">Autor</th>  
                                        <th scope="col">Departamento</th>
                                        <th scope="col">Nombre del proyecto</th> 
                                        <th scope="col">Ver Documento</th> 
                                        <th scope="col">Editar</th> 
                                        <th scope="col">Eliminar</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($proyectos as $proyecto)
                                    <tr>
                                            <td>{{$proyecto->titulo}}</td>
                                            <td>{{$proyecto->fecha}}</td>
                                            <td>{{$proyecto->autor}}</td>
                                            <td>{{$proyecto->departamento}}</td>
                                            <td>{{$proyecto->pdf}}</td> 
                                            <td><a class="btn btn-dark" href="Archivo/{{$proyecto->pdf}}" target="blank_">Ver Documento</a></td>
                                            <td>
                                                <a href="/proyectos/{{$proyecto->id}}/edit" class="btn btn-info">Editar</a>  
                                            </td> 
                                            <td>
                                                <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" onsubmit="return confirm('¿Estas seguro de borrar?');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-danger bg-danger " value="Delete">
                                                </form>         
                                            </td>      
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
</x-app-layout>