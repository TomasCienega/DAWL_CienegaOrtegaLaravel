@extends('layouts.internal')
@section('content')

<a href="{{URL::to('users')}}">Regresar</a> <br> <br>
<h1>Formulario de Creación</h1>
{{HTML::ul($errors->all())}}

{{Form::open(['url' => 'users'])}}

<div class="form-group col-md-3">
    {{Form::label('name','Nombre')}}
    {{Form::text('name', Request::old('name'), ["class" => "form-control"] )}}
</div>

<div class="form-group col-md-3">
    {{Form::label('password','Contraseña')}}
    {{Form::text('password', Request::old('password'), ["class" => "form-control"] )}}
</div>

<div class="form-group col-md-3">
    {{Form::label('email','Correo electrónico')}}
    {{Form::text('email', Request::old('email'), ["class" => "form-control"] )}}
</div>

{{Form::submit('Registrar usuario' , ["class" => "btn btn-primary"] )}}
{{Form::close()}}

@endsection
