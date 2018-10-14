@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            <h3>@include('uploadExcels.fragments.error')</h3>
            <div class="card">
                <div class="card-header">Archivos Excel</div>

                <div class="card-body">                    
                    {{ Form::open(['route' => 'excels.store', 'files' => true]) }}

                        @include('uploadExcels.fragments.formExcel')
                        
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection