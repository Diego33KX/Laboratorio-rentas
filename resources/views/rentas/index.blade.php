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
                <div class="container py-3 text-center">
                    <strong><h1 class="text_center">HISTORIAL DE VENTAS</h1></strong>
                </div>
                <table class="table table-hover py-3">
                        <thead class="text-center table-dark">
                        <tr>
                            <th scope="col">Nombre de pelicula</th>
                            <th scope="col">Fecha de registro</th>
                            <th scope="col">Fecha de devolucion</th>
                            <th scope="col">Fecha de entrega</th>
                            <th scope="col" colspan="2">Accion</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        @if($rentas->count())
                        @foreach($rentas as $renta)
                            <tr>
                            <td>{{$renta -> nombre}}</td>
                            <td>{{$renta -> fecha_registro}}</td>
                            <td>{{$renta -> fecha_devolucion}}</td>
                            <td>{{$renta -> fecha_entrega}}</td> 
                            <td><a class="btn btn-success btn-xs" href="{{ route('Rentas.show',$renta -> id) }}">Editar</a></td>
                            <td>

                            <form action="{{ route('Rentas.destroy',$renta -> id) }}" method="post">
                                {{csrf_field()}}
                                @method('DELETE')
                                <input name="_method" type="hidden" value="DELETE">
                                <input id="email_user" class="block mt-1 w-full" type="hidden" name="email_user" value="{{ Auth::user()->id }}"/>

                                <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash">Eliminar</span></button>
                            </form>
                            </td>
                            </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="8">No hay registro de rentas por  el momento !!</td>
                        </tr>
                        @endif
                        </tbody>            
                    </table>
                    <a href="{{ route('Peliculas.index') }}" class="btn btn-info btn-block d-grid gap-2 d-md-block" >Atrás</a>
            </div>
        </div>
    </div>
</x-app-layout>