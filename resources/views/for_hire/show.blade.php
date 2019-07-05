@extends('layouts.app')
@section('content')
    <div class="container-fluid col-md-6 col-md-offset-3 text-center">
        <h1> Datos del Alumno seleccionado</h1>
        <hr style="background-color: #1b1e21">
        {{--<form action="{{ route('for_hire.show',$student->id) }}" method="POST">--}}
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
        {{--</form>--}}
        <hr>
    </div>

    <div class="container-fluid">
        {{--Navbar de busqueda--}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Libros</a>
            <ul class="navbar-nav">
                <li>
                    <form class="form-inline my-2 my-lg-0" method="post" action="{{route('for_hire.searchByFilter')}}">
                        @csrf
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="search">
                        <div class="input-group mr-sm-2">
                            <select class="custom-select" id="inputGroupSelect01" name="filter">
                                <option selected>Filtro</option>
                                <option value="isbn">ISBN</option>
                                <option value="name">Nombre</option>
                                <option value="author">Autor</option>
                                <option value="category">Categoría</option>
                            </select>
                        </div>
                        <button class="btn btn-outline-info my-2 my-sm-2" type="submit">Buscar</button>
                    </form>
                </li>
                <li>
                    <div class="my-sm-2">


                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        {{--Tabla de Libros--}}
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">ISBN</th>
                <th scope="col">Nombre</th>
                <th scope="col">Editorial</th>
                <th scope="col">Edición</th>
                <th scope="col">Autor</th>
                <th scope="col">Categoría</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>

            @foreach($books as $book)
                <tr>
                    @if($book->condition == 0)
                    <th>{{ $book->isbn }}</th>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>{{ $book->edition }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->category }}</td>
                    <td>

                        <a class="btn btn-success" href="{{ route('for_hire.add', [$book->id,$student->id])}}">

                            <i class="i fas fa-book"></i>
                        </a>

                    </td>
                @endif
            @endforeach
            </tr>
        </table>
    </div>
@endsection
