<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            LISTA DEL CARRUSEL
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
               <a href="carrusel/create" class="btn btn-primary">NUEVA IMAGEN</a>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table id="tabla" class="table table-bordered table-responsive table-hover table-cell-border" style="width:100%">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th scope="col">Orden</th>
                                        <th scope="col">Descripcion</th>   
                                        <th scope="col">Image</th>    
                                        <th scope="col">Editar</th> 
                                        <th scope="col">Eliminar</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($carrusels as $carrusel)
                                    <tr>
                                            <td>{{$carrusel->orden}}</td>
                                            <td>{{$carrusel->descripcion}}</td>
                                            <td><img src="{{$carrusel->urlfoto}}" width="400"></td>     
                                            <td>
                                                <a href="/carrusel/{{$carrusel->id}}/edit" class="btn btn-info">Editar</a>  
                                            </td> 
                                            <td>
                                                <form action="{{ route('carrusel.destroy', $carrusel->id) }}" method="POST" onsubmit="return confirm('¿Estas seguro de borrar?');">
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
