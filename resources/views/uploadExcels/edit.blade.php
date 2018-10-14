@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            @include('users.fragments.info')
            <h3>@include('uploadExcels.fragments.error')</h3>
            <div class="card">
                <div class="card-header">Editar Archivo</div>

                <div class="card-body">                    
                    {!! Form::model($excel, ['route' => ['excels.update', $excel->id],
                    'method' => 'PUT', 'files' => true]) !!}

                        @include('uploadExcels.fragments.formExcel')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection