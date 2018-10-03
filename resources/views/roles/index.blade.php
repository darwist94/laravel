@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Roles
                    @can('permitir.crear')
                    <a href="{{ route('roles.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    @endcan
                </div>

                <div class="card-body">
                    <table id="tbRoles" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                
                                <th>&nbsp;</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->description }}</td>
                                
                                
                                <td>
                                    @can('permitir.editar')
                                    <a href="{{ route('roles.edit', $role->id) }}" 
                                    class="btn btn-sm btn-info btn-block">
                                        editar
                                    </a>
                                    @endcan
                                    @can('permitir.eliminar')
                                    {!! Form::open(['route' => ['roles.destroy', $role->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger btn-block">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                @endcan
                                
                                </td>
                                
                                
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