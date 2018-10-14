@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header card-header-success">
                    Archivos Excel
                    <a href="{{ route('excels.create') }}" 
                    class="btn btn-sm btn-primary">
                        Crear
                    </a>
                    
                   {!! Form::open(['route' => ['excels.index'], 
                                    'method' => 'GET', 'class' => 'form-inline float-right']) !!}
                                        <div class="form-group">
                                            {{ Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'titulo'])}}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'descripcion'])}}
                                        </div>
                                        <button type="submit" class="btn btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    {!! Form::close() !!} 
                
                </div>
                

                <div class="card-body">

                    <table class="table table-striped table-hover">
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
                    {!! $excels->links('pagination::bootstrap-4') !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
