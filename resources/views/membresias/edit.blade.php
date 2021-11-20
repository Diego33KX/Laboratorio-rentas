<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    .contenedor{
        margin: auto;
    	margin-top: 15%;
    	padding: 0;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Membresia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-guest-layout>
                <div class="card text-center mb-6">
                    <div class="card-body">
                        <form method="POST" action="{{ route('Membresias.update',$membresias -> id) }}">{{ csrf_field() }}
                                <input name="_method" type="hidden" value="PATCH"> 
                                <div>
                                    
                                    <x-jet-input id="id_user" class="block mt-1 w-full" type="hidden" name="id_user" value="{{ Auth::user()->id }}"/>
                                </div>
                                <div>
                                    
                                    <x-jet-input id="fecha_expedicion" class="block mt-1 w-full" type="text" name="fecha_expedicion" value="{{$membresias -> fecha_expedicion}}" readonly/>
                                </div>
                                <div>
                                    <x-jet-label for="fecha_expiracion" value="{{ __('Fecha_expiracion') }}" />
                                    <x-jet-input id="fecha_expiracion" class="block mt-1 w-full" type="text" name="fecha_expiracion" value="{{$membresias -> fecha_expiracion}}"/>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-12 py-2">
                                        <input type="submit" value="Guardar" class="btn btn-success btn-block"/>
                                        <a href="{{ route('Peliculas.index') }}" class="btn btn-info btn-block" >Atrás</a>
                                </div>
                        </form>
                        </div>
                    </div>
                
                </x-guest-layout>
                </div>
        </div>
    </div>
</x-app-layout>                