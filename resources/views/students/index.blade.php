@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        {{--Navbar de busqueda--}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Alumnos</a>
            <ul class="navbar-nav">
                <li>
                    <form class="form-inline my-2 my-lg-0" method="post" action="{{route('students.searchByFilter')}}">
                        @csrf
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="search">
                        <div class="input-group mr-sm-2">
                            <select class="custom-select" id="inputGroupSelect01" name="filter">
                                <option selected>Filtro</option>
                                <option value="dni">Dni</option>
                                <option value="name">Nombre</option>
                                <option value="career">Carrera</option>
                            </select>
                        </div>
                        <button class="btn btn-outline-info my-2 my-sm-2" type="submit">Buscar</button>
                    </form>
                </li>
                <li>
                    <div class="my-sm-2">
                        <a class="btn btn-success float-right ml-sm-2" href="{{ route('students.create')}}">
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
                <th scope="col">Dni</th>
                <th scope="col">Nombre</th>
                <th scope="col">Carrera</th>
                <th scope="col">email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>

            @foreach($students as $student)
                <tr>
                    <th>{{ $student->dni }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->career }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->address }}</td>
                    <td>
                        <a class="btn btn-secondary" href="{{ route('students.show', $student->id) }}">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td><td>
                        <a class="btn btn-success" href="{{ route('students.edit', $student->id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <form style="display:inline;" action="{{ route('students.destroy', $student->id) }}" method="POST">
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
