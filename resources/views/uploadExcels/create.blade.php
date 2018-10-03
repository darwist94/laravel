@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">Archivos Excel</div>

                <div class="card-body">                    
                    {{ Form::open(['route' => 'excels.store', 'enctype' => 'multipart/form-data']) }}

                        @include('uploadExcels.fragments.formExcel')
                        
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection