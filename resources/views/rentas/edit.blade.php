<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <x-guest-layout>
                    <form method="POST" action="{{ route('Rentas.update',$rents->id) }}" role="form">{{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">  
                            <div>
                                <x-jet-input id="email_user" class="block mt-1 w-full" type="hidden" name="email_user" value="{{ $rents->email_user}}"/>
                            </div>
                            <div>
                                <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                                <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" value="{{ $rents->nombre }}" readonly/>
                            </div>
                            <div>
                                <x-jet-label for="fecha_registro" value="{{ __('Fecha de registro') }}" />
                                <x-jet-input id="fecha_registro" class="block mt-1 w-full" type="text" name="fecha_registro" value="{{ $rents->fecha_registro }}" />
                            </div>
                            
                            <div class="mt-4">
                                <x-jet-label for="fecha_devolucion" value="{{ __('Fecha de devolucion') }}" />
                                <x-jet-input id="fecha_devolucion" class="block mt-1 w-full" type="text" name="fecha_devolucion" value="{{ $rents->fecha_devolucion }}" />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="fecha_entrega" value="{{ __('Fecha de entrega') }}" />
                                <x-jet-input id="fecha_entrega" class="block mt-1 w-full" type="text" name="fecha_entrega" value="{{ $rents->fecha_entrega }}" />
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 py-3">
                                    <input type="submit" value="Guardar" class="btn btn-success btn-block"/>
                                    <a href="{{ route('Rentas.edit',Auth::user()->id) }}" class="btn btn-info btn-block" >Atrás</a>
                            </div>
                    </form>
                </x-guest-layout>
            </div>
        </div>
    </div>
</x-app-layout>