@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        {{--Navbar de busqueda--}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Libros</a>
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
                <li>
                    <div class="my-sm-2">
                        <a class="btn btn-success float-right ml-sm-2" href="{{ route('books.create')}}">
                            Agregar
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
                    <th>{{ $book->isbn }}</th>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>{{ $book->edition }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->category }}</td>
                    <td>
                        <a class="btn btn-secondary" href="{{ route('books.edit', $book->id) }}">  {{--agregar show--}}
                            <i class="fas fa-eye"></i>
                        </a>
                    </td><td>
                        <a class="btn btn-success" href="{{ route('books.edit', $book->id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <form style="display:inline;" action="{{ route('books.destroy', $book->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
