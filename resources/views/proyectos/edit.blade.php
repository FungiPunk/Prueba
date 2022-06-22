<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            EDITAR PROYECTO
    </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                <form action="/proyectos/{{$proyecto->id}}" method="POST" enctype="multipart/form-data">
                    @csrf    
                    @method('PUT')
                    <div class="mb-3">
                        <label for="" class="form-label">Titulo</label>
                        <input id="titulo" name="titulo" type="text" class="form-control" value="{{$proyecto->titulo}}">    
                    </div>
                        <div class="mb-3">
                        <label for="" class="form-label">Fecha</label>
                        <input id="fecha" name="fecha" type="text" class="form-control" value="{{$proyecto->fecha}}">    
                        </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Autor</label>
                        <input id="autor" name="autor" type="text" class="form-control" value="{{$proyecto->autor}}">    
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Departamento</label>
                        <input id="departamento" name="departamento" type="text" class="form-control" value="{{$proyecto->departamento}}">    
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">PDF</label>
                        <input id="pdf" name="pdf" type="file" class="form-control" value="{{$proyecto->pdf}}">    
                    </div>
                    <a href="/proyectos" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="bg-primary btn btn-primary">Guardar</button>
                 </div>
                </form>
        </div>

</x-app-layout>
