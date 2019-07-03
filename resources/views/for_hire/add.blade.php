@extends('layouts.app')
@section('content')
    <div class="container-fluid col-md-6 col-md-offset-3 text-center">
        <h1> Datos del Alumno seleccionado</h1>
        <hr style="background-color: #1b1e21">
        <form action="{{ route('for_hire.add', [$student->id]) }}" method="POST">
            @csrf

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
            ¿No es el alumno correcto?
            <br>
            <a class="btn btn-secondary" href="{{ route('students.index') }}">Volver</a>
        </form>
        <hr>
    </div>
    <div class="container-fluid col-md-6 col-md-offset-3 text-center">
        <h1> Datos del Libro seleccionado</h1>
        <hr style="background-color: #1b1e21">
        <form action="{{ route('for_hire.add',[$book->id]) }}" method="POST">
            @csrf

            <br>
            <label for="" class="text-left">
                ISBN
                <input class="form-control" type="text" name="name" value="{{$book->isbn}}" disabled >
            </label>
            <br>
            <label for="" class="text-left">
                Nombre
                <input class="form-control" type="text" name="career" value="{{$book->name}}" disabled ></label>
            <br>

            <label for="" class="text-left">
                Editorial
                <input class="form-control" type="text" name="phone" value="{{$book->publisher }}" disabled>
            </label>
            <br>
            <label for="" class="text-left">
                Edicion
                <input class="form-control" type="text" name="address" value="{{$book->edition }}" disabled >
            </label>
            <br>
            <label for="" class="text-left">
                Autor
                <input class="form-control" type="text" name="address" value="{{$book->author }}" disabled >
            </label>
            <br>
            <label for="" class="text-left">
                Categoria
                <input class="form-control" type="text" name="address" value="{{$book->category }}" disabled >
            </label>
            <br>
            <br>
            ¿No es el libro correcto?
            <br>
            <a class="btn btn-secondary" href="{{ route('for_hire.show',$student->id) }}">Volver</a>
        </form>
        <hr>

            <form action="{{ route('for_hire.add', [$student->id,$book->id]) }}" method="POST">
            <br>
            <a class="btn btn-secondary" href="{{ route('for_hire.index',[$book->id,$student->id]) }}">Efectuar Préstamo</a>

            </form>
    </div>

@endsection