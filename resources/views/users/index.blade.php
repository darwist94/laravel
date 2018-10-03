@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Usuarios
                </div>

                <div class="card-body">
                    <table id="tbUsers" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                
                                <th>&nbsp;</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                
                                <td>
                                    @can('permitir.editar')
                                    <a href="{{ route('users.edit', $user->id) }}" 
                                    class="btn btn-sm btn-info btn-block">
                                        editar
                                    </a>
                                    @endcan
                                    @can('permitir.eliminar')
                                    {!! Form::open(['route' => ['users.destroy', $user->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger btn-block">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection