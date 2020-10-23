@extends('layouts.internal')
@section('content')
<a href="{{route('users.create')}}">Registrar Usuario</a> <br> <br>
@if(Session::has('message'))
    {{Session::get('mesage')}} <br> <br>
@endif
<table class="table table-straped">
    <thead>
        <tr>
            <td>Nombre</td>
            <td>Correo</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($tableUsers as $rowUser)
            <tr>
                <td>{{$rowUser->name}}</td>
                <td>{{$rowUser->email}}</td>
            </tr>
        @endforeach
    </tbody>
</table>



@endsection
