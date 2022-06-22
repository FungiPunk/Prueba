<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               SUBIR PROYECTO
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                <form action="/proyectos" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Titulo</label>
                    <input id="titulo" name="titulo" type="text" class="form-control" tabindex="1">    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Fecha</label>
                    <input id="fecha" name="fecha" type="text" class="form-control" tabindex="2">    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Autor</label>
                    <input id="autor" name="autor" type="text" class="form-control" tabindex="3">    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Departamento</label>
                    <input id="departamento" name="departamento" type="text" class="form-control" tabindex="4">    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">PDF</label>
                    <input id="pdf" name="pdf" type="file" class="form-control" tabindex="5">    
                </div>
                <a href="/proyectos" class="btn btn-secondary" tabindex="6">Cancelar</a>
                <button type="submit" class="bg-primary btn btn-primary" tabindex="7">Guardar</button>
                </div>
                </form>
        </div>
    </div>
</x-app-layout>