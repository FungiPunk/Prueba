<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            EDITAR FOTO DE CARRUSEL
    </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            
                <form action="/carrusel/{{$carrusel->id}}" method="POST" enctype="multipart/form-data">
                    @csrf    
                    @method('PUT')
                <div class="mb-3">
                    <label for="" class="form-label">Descripcion</label>
                    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$carrusel->descripcion}}">    
                </div>
                    <div class="mb-3">
                    <label for="" class="form-label">Link</label>
                    <input id="link" name="link" type="text" class="form-control" value="{{$carrusel->link}}">    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Orden</label>
                    <input id="orden" name="orden" type="text" class="form-control" value="{{$carrusel->orden}}">    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Imagen</label>
                    <input id="urlfoto" name="urlfoto" type="file" class="form-control" value="{{$carrusel->urlfoto}}">    
                </div>
                <a href="/carrusel" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="bg-primary btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
