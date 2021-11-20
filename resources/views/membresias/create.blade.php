<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Crear_Membresia') }}
        </h2>
    </x-slot>
    <div class="container py-5">
        <form method="POST" action="{{ route('Membresias.store') }}">
                {{ csrf_field() }}
                
                <div>
                    <x-jet-input id="id_user" class="block mt-1 w-full" type="hidden" name="id_user" value="{{ Auth::user()->id }}"/>
                </div>
                <div>
                    <x-jet-label for="fecha_expedicion" value="{{ __('Fecha de inicio') }}" />
                    <x-jet-input id="fecha_expedicion" class="block mt-1 w-full" type="text" name="fecha_expedicion"/>
                </div>
                <div>
                    <x-jet-label for="fecha_expiracion" value="{{ __('Fecha de Expiracion') }}" />
                    <x-jet-input id="fecha_expiracion" class="block mt-1 w-full" type="text" name="fecha_expiracion" />
                </div>
                

                <div class="col-xs-12 col-sm-12 col-md-12 py-3">
                        <input type="submit" value="Guardar" class="btn btn-success btn-block"/>
                        <a href="{{ route('Peliculas.index') }}" class="btn btn-info btn-block" >Atrás</a>
                </div>
        </form>
</div>
</x-app-layout>