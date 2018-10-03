@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">Roles</div>

                <div class="card-body">                    
                    {{ Form::open(['route' => 'roles.store']) }}

                        @include('roles.fragments.form')
                        
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection