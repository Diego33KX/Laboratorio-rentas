<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<x-guest-layout>
    <form method="POST"  action="{{ route('Rentas.store') }}">
            <div class="mt-4">
                <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                {{ csrf_field() }}
            </div>
            <div>
                <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" value="{{ $peliculas->nombre }}" required autofocus autocomplete="nombre" />
            </div>
            <div>
                <x-jet-label for="fecha_de_registro" value="{{ __('Fecha_de_registro') }}" />
                <x-jet-input id="fecha_de_registro" class="block mt-1 w-full" type="text" name="fecha_de_registro"  required autofocus autocomplete="nombre" />
            </div>
            
            <div class="mt-4">
                <x-jet-label for="fecha_de_devolucion" value="{{ __('Fecha_de_devolucion') }}" />
                <x-jet-input id="fecha_de_devolucion" class="block mt-1 w-full" type="text" name="fecha_de_devolucion" :value="old('fecha_de_devolucion')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="fecha_de_entrega" value="{{ __('Fecha_de_entrega') }}" />
                <x-jet-input id="fecha_de_entrega" class="block mt-1 w-full" type="text" name="fecha_de_entrega" :value="old('fecha_de_entrega')" required />
            </div><tr>

            
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <input type="submit"  value="Guardar" class="btn btn-success btn-block">
                    <a href="{{ route('Peliculas.index') }}" class="btn btn-info btn-block" >Atrás</a>
            </div>
    </form>
</x-guest-layout>