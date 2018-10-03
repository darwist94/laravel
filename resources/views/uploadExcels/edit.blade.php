@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('users.fragments.info')
            <div class="card">
                <div class="card-header">Editar Archivo</div>

                <div class="card-body">                    
                    {!! Form::model($excel, ['route' => ['excels.update', $excel->id],
                    'method' => 'PUT']) !!}

                        @include('uploadExcels.fragments.formExcel')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection