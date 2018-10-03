@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Upload de Archivos Excel
                    <a href="{{ route('excels.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                </div>

                <div class="card-body">
                    <table id="tbExcel" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th>Descripcion</th>
                                
                                <th>&nbsp;</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($excels as $excel)
                            <tr>
                                <td>{{ $excel->id }}</td>
                                <td>{{ $excel->titulo }}</td>
                                <td>{{ $excel->descripcion }}</td>
                                
                                <td>
                                    <a href="{{ route('excels.edit', $excel->id) }}" 
                                    class="btn btn-sm btn-info btn-block">
                                        editar
                                    </a>
                                    {!! Form::open(['route' => ['excels.destroy', $excel->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger btn-block">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
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
