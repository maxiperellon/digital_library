@extends('layouts.app')
@section('content')
    <div class="container-fluid text-center">
        <img src="{{ asset('/img/imagen_libro.png') }}" style="width: 30% ; height: 30%">
        <br><br>
        <div class="container-fluid col-md-6 text-center">
            <div class="row">
                <div class="col-md-6">
                    <a class="btn btn-primary btn-lg btn-block" href="{{ route('books.index') }}">LIBROS</a>
                </div>
                <div class="col-md-6">
                    <a class="btn btn-secondary btn-lg btn-block" href="{{ route('students.index') }}">ESTUDIANTES</a>
                </div>
            </div>
        </div>
    </div>
@endsection
