@extends('layouts.app')
@section('content')
    <div class="container-fluid col-md-6 col-md-offset-3 text-center">
        <h1> Datos Alumno </h1>
        <hr style="background-color: #1b1e21">
        <form action="{{ route('students.show',$student->id) }}" method="POST">
            @csrf
            <br>
            <label for="" class="text-left">
                Dni
                <input class="form-control" type="text" name="dni" value="{{$student->dni}}" disabled>
            </label>
            <br>
            <label for="" class="text-left">
                Nombre
                <input class="form-control" type="text" name="name" value="{{$student->name}}" disabled >
            </label>
            <br>
            <label for="" class="text-left">
                Carrera
                <input class="form-control" type="text" name="career" value="{{$student->career}}" disabled >
            </label>
            <br>
            <label for="" class="text-left">
                Email
                <input class="form-control" type="text" name="email" value="{{$student->email }}" disabled >
            </label>
            <br>
            <label for="" class="text-left">
                Telefono
                <input class="form-control" type="text" name="phone" value="{{$student->phone }}" disabled>
            </label>
            <br>
            <label for="" class="text-left">
                Direccion
                <input class="form-control" type="text" name="address" value="{{$student->address }}" disabled >
            </label>
            <br>
            <br>
            <a class="btn btn-dark" href="{{ route('for_hire.for_hire') }}">Libros</a>
            <input class="btn btn-primary" type="submit" value="{{ 'Guardar ' }}">
            <a class="btn btn-danger" href="{{ route('students.index') }}">Cancelar</a>

        </form>
        <hr>
    </div>
@endsection
