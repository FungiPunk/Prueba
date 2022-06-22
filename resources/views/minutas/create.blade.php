<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                CREAR MINUTA
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                <form action="/minutas" method="POST" enctype="multipart/form-data">
                    @csrf

                <div class="mb-3">
                    <label for="" class="form-label">Fecha</label>
                    <input id="fecha" name="fecha" type="text" class="form-control" tabindex="1">    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Lugar</label>
                    <input id="lugar" name="lugar" type="text" class="form-control" tabindex="2">    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">De</label>
                    <textarea id="de" name="de" rows="5"  type="text" class="form-control" tabindex="3">   </textarea>   
                </div>
                <div class="mb-3" >
                    <label for="" class="form-label">Para</label>
                    <textarea id="para" name="para" rows="10"  type="text" class="form-control" tabindex="4">  </textarea>    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Asunto</label>
                    <input id="asunto" name="asunto" type="text" class="form-control" tabindex="5">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Saludo</label>
                    <textarea id="saludo" name="saludo" rows="6"  type="text" class="form-control" tabindex="6"> </textarea>     
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Lista</label>
                    <textarea id="lista" name="lista" rows="10" type="text" class="form-control" tabindex="7"> </textarea>     
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Agenda</label>
                    <textarea id="agenda" rows="10" name="agenda" type="text" class="form-control" tabindex="8"> </textarea>     
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Temas</label>
                    <textarea id="temas" rows="10" name="temas" type="text" class="form-control" tabindex="9">  </textarea>    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Acuerdos</label>
                    <textarea id="acuerdos" rows="20"  name="acuerdos" type="text" class="form-control" tabindex="10">  </textarea>    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Acciones</label>
                    <textarea id="acciones"  rows="20" name="acciones" type="text" class="form-control" tabindex="11">   </textarea>   
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Firma</label>
                    <input id="firma" name="firma" type="text" class="form-control" tabindex="12">    
                </div>


                <a href="/minutas" class="btn btn-secondary" tabindex="13">Cancelar</a>
                
                <button type="submit" class="bg-primary btn btn-primary" tabindex="14">Guardar</button>
                </form>
        </div>
    </div>
</x-app-layout>