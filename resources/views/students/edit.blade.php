@extends('layouts.app')
@section('content')
    <div class="container-fluid col-md-6 col-md-offset-3 text-center">
        <h1> Editar Alumnos </h1>
        <hr style="background-color: #1b1e21">
        <form action="{{ route('students.update',$student->id) }}" method="POST">
            @csrf
            @method('patch')
            <br>
            <label for="" class="text-left">
                Dni
                <input class="form-control" type="text" name="dni" value="{{$student->dni}}">
                {!! $errors->first('dni','<span class=error>:message</span>') !!}
            </label>
            <br>
            <label for="" class="text-left">
                Nombre
                <input class="form-control" type="text" name="name" value="{{$student->name}}" >
                {!! $errors->first('name','<span class=error>:message</span>') !!}
            </label>
            <br>
            <label for="" class="text-left">
                Carrera
                <input class="form-control" type="text" name="career" value="{{$student->career}}" >
                {!! $errors->first('career','<span class=error>:message</span>') !!}
            </label>
            <br>
            <label for="" class="text-left">
                Email
                <input class="form-control" type="text" name="email" value="{{$student->email }}" >
                {!! $errors->first('email','<span class=error>:message</span>') !!}
            </label>
            <br>
            <label for="" class="text-left">
                Telefono
                <input class="form-control" type="text" name="phone" value="{{$student->phone }}" >
                {!! $errors->first('phone','<span class=error>:message</span>') !!}
            </label>
            <br>
            <label for="" class="text-left">
                Direccion
                <input class="form-control" type="text" name="address" value="{{$student->address }}" >
                {!! $errors->first('address', '<span class=error>:message</span>') !!}
            </label>
            <br>
            <input class="btn btn-primary" type="submit" value="{{ 'Guardar ' }}">
            <a class="btn btn-danger" href="{{ route('students.index') }}">Cancelar</a>

        </form>
        <hr>
    </div>
@endsection
