<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Rentar Pelicula') }}
        </h2>
    </x-slot>


    <div class="container py-5">
    <form method="POST" action="{{ route('Rentas.store') }}">
            {{ csrf_field() }}
            
            <div>
                
                <x-jet-input id="email_user" class="block mt-1 w-full" type="hidden" name="email_user" value="{{ Auth::user()->id }}"/>
            </div>
            
            <div>
            
                <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" value="{{ $peliculas->nombre }}" readonly/>
            
            </div>
            <div>
                <x-jet-label for="fecha_registro" value="{{ __('Fecha de registro') }}" />
                <x-jet-input id="fecha_registro" class="block mt-1 w-full" type="text" name="fecha_registro"/>
            </div>
           
            <div class="mt-4">
                <x-jet-label for="fecha_devolucion" value="{{ __('Fecha de devolucion') }}" />
                <x-jet-input id="fecha_devolucion" class="block mt-1 w-full" type="text" name="fecha_devolucion" />
            </div>

            <div class="mt-4">
                <x-jet-label for="fecha_entrega" value="{{ __('Fecha de entrega') }}" />
                <x-jet-input id="fecha_entrega" class="block mt-1 w-full" type="text" name="fecha_entrega" />
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 py-3">
                    <input type="submit" value="Guardar" class="btn btn-success btn-block d-grid gap-2"/>
                    <a href="{{ route('Peliculas.index') }}" class="btn btn-info btn-block  d-grid gap-2 d-md-block" >Atrás</a>
            </div>
    </form>
    </div>
</x-app-layout>