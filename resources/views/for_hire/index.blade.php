@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        {{--Navbar de busqueda--}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Prestamos</a>
            <ul class="navbar-nav">
                <li>
                    <form class="form-inline my-2 my-lg-0" method="post" action="{{route('books.searchByFilter')}}">
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
            </ul>
        </nav>
        {{--Tabla de Libros--}}
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Nombre del Alumno</th>
                <th scope="col">Nombre del Libro</th>
                <th scope="col">Carrera</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>

            @foreach($for_hires as $for_hire)
                <tr>
                    <td>{{ $for_hire->student->name }}</td>
                    <td>{{ $for_hire->book->name }}</td>
                    <td>{{ $for_hire->student->career }}</td>
                    <td>{{ $for_hire->student->email }}</td>
                    <td>{{ $for_hire->student->phone }}</td>
                    <td>{{ $for_hire->student->address }}</td>
                    <td>
                    <td>
                        <a class="btn btn-secondary" href="{{ route('for_hire.add', [$book->id,$student->id])}}">
                            <i class="fas fa-book"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
