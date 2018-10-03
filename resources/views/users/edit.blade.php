@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-md-8 col-md-offset-2">
            @include('users.fragments.info')
            <div class="card">
                <div class="card-header">Usuarios</div>

                <div class="card-body">                    
                    {!! Form::model($user, ['route' => ['users.update', $user->id],
                    'method' => 'PUT']) !!}

                        @include('users.fragments.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection