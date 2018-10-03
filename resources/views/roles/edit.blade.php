@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('users.fragments.info')
            <div class="card">
                <div class="card-header">Roles</div>

                <div class="card-body">                    
                    {!! Form::model($role, ['route' => ['roles.update', $role->id],
                    'method' => 'PUT']) !!}

                        @include('roles.fragments.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection