<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Membresia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container py-3">
                    <strong><h1 class="text-center">DATOS DE MEMBRESIA</h1></strong>
                    <td></td>
                </div>
                <table class="table table-hover py-3">
                        <thead class="text-center table-primary">
                        <tr>
                            
                            <th scope="col">Fecha de expedicion</th>
                            <th scope="col">Fecha de expiracion</th>
                            <th scope="col" colspan="2">Accion</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        @if($membresias->count())
                        @foreach($membresias as $membresia)
                            <tr>
                            <td>{{$membresia -> fecha_expedicion}}</td>
                            <td>{{$membresia -> fecha_expiracion}}</td>
                            <td class="text-center"><a class="btn btn-success btn-xs" href="{{ route('Membresias.edit',$membresia -> id) }}">Editar</a></td>
                            
                            <td class="text-center">
                            <form action=" {{ route('Membresias.destroy',$membresia -> id ) }} " method="post">
                                {{csrf_field()}}
                                @method('DELETE')
                                <input name="_method" type="hidden" value="DELETE">
                                <input id="id_user" class="block mt-1 w-full" type="hidden" name="id_user" value="{{ $membresia -> id }}"/>

                                <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash">Eliminar</span></button>
                            </td>
                            </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="8">Usted aun no cuenta con una membresia (Acceso Free por 1 mes)!!!</td>
                        </tr>
                        @endif
                        </tbody>            
                    </table>
                    @if($membresias->count())
                    <fieldset disabled>
                        <td><a class="btn btn-success btn-xs d-grid gap-2 d-md-block" href="{{ route('Membresias.index') }}">Crear Membresia</a></td>
                    </fieldset>
                    @else
                        <td><a class="btn btn-success btn-xs d-grid gap-2 d-md-block" href="{{ route('Membresias.index') }}">Crear Membresia</a></td>
                    @endif
                    <a href="{{ route('Peliculas.index') }}" class="btn btn-info btn-block d-grid gap-2 d-md-block" >Atrás</a>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
</x-app-layout>