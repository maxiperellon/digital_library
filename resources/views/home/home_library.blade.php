@extends('layouts.app')
@section('content')
    <div class="container-fluid text-center">
        <img src="{{ asset('/img/imagen_libro.png') }}" style="width: 30% ; height: 30%">
        <br><br>
        <div class="container-fluid col-md-8 text-center">
            <div class="row">
                <div class="col-xs-6 col-sm-4">
                    <a class="btn btn-secondary btn-lg btn-block" href="{{ route('students.index') }}">ESTUDIANTES</a>
                </div>
                <br>
                <div class="col-xs-6 col-sm-4">
                    <a class="btn btn-secondary btn-lg btn-block" href="{{ route('books.index') }}">CARGAR LIBRO</a>
                </div>
                <br>
                <div class="col-xs-6 col-sm-4">
                    <a class="btn btn-secondary btn-lg btn-block" href="{{ route('for_hire.index') }}">PRESTAMOS</a>
                </div>
            </div>
        </div>
    </div>
@endsection
