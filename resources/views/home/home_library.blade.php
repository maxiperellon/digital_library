@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        {{--Navbar de busqueda--}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">HOME</a>
            <ul class="navbar-nav">
                <li>
                    <div class="my-sm-2">

                    </div>
                </li>
            </ul>
        </nav>
        <button type="button" class="btn btn-primary btn-lg btn-block" href="{{ route('books.index') }}">LIBROS</button>
        <br>
        <button type="button" class="btn btn-secondary btn-lg btn-block" href="{{ route('students.index') }}">ESTUDIANTES</button>
    </div>
@endsection
