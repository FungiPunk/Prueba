<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            EDITAR MINUTA
    </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <form action="/minutas/{{$minuta->id}}" method="POST" enctype="multipart/form-data">
                @csrf    
                @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Fecha</label>
            <input id="fecha" name="fecha" type="text" class="form-control" value="{{$minuta->fecha}}"> 
        </div>
            <div class="mb-3">
            <label for="" class="form-label">Lugar</label>
            <input id="lugar" name="lugar" type="text" class="form-control" value="{{$minuta->lugar}}">  
        </div>
        <div class="mb-3">
            <label for="" class="form-label">De</label>
            <textarea id="de" name="de" type="text" class="form-control">{{$minuta->de}}</textarea>   
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Para</label>
            <textarea id="para" name="para" type="text" class="form-control">{{$minuta->para}}</textarea>   
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Asunto</label>
            <textarea id="asunto" name="asunto" type="text" class="form-control">{{$minuta->asunto}}</textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Saludo</label>
            <textarea id="saludo" name="saludo" type="text" class="form-control">{{$minuta->saludo}}</textarea>   
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Lista</label>
            <textarea id="lista" name="lista" type="text" class="form-control">{{$minuta->lista}}</textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Agenda</label>
            <textarea id="agenda" name="agenda" rows="7" type="text" class="form-control">{{$minuta->agenda}}</textarea>  
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Temas</label>
            <textarea id="temas" name="temas" rows="10" type="text" class="form-control">{{$minuta->temas}}</textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Acuerdos</label>
            <textarea id="acuerdos" name="acuerdos" rows="20" type="text" class="form-control">{{$minuta->acuerdos}}</textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Acciones</label>
            <textarea id="acciones" name="acciones" rows="20" type="text" class="form-control">{{$minuta->acciones}}</textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Firma</label>
            <input id="firma" name="firma" type="text" class="form-control" value="{{$minuta->firma}}">
        </div>
        <a href="/minutas" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="bg-primary btn btn-primary">Guardar</button>
        </div>
    </form>
    </div>
</div>
</x-app-layout>