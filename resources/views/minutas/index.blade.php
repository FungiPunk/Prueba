<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            LISTA DE MINUTAS
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
               <a href="minutas/create" class="btn btn-primary">CREAR MINUTA</a>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table id="tabla" class="table table-bordered table-responsive table-hover table-cell-border" style="width:100%">
                                <thead class="bg-primary text-white">
                                    <tr> 
                                        <th scope="col">Fecha</th>  
                                        <th scope="col">Asunto</th>      
                                        <th scope="col">Editar</th> 
                                        <th scope="col">Eliminar</th> 
                                        <th scope="col">PDF</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($minutas as $minuta)
                                    <tr>
                                            <td>{{$minuta->fecha}}</td>
                                            <td>{{$minuta->asunto}}</td>    
                                            <td>
                                                <a href="/minutas/{{$minuta->id}}/edit" class="btn btn-info">Editar</a>  
                                            </td> 
                                            <td>
                                                <form action="{{ route('minutas.destroy', $minuta->id) }}" method="POST" onsubmit="return confirm('¿Estas seguro de borrar?');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-danger bg-danger " value="Delete">
                                                </form>          
                                            </td>        
                                            <td>
                                                <a href="{{ route('download-pdf', $minuta->id) }}" class="btn btn-success">PDF</a>
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