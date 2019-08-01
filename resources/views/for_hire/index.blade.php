@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        {{--Navbar de busqueda--}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Prestamos</a>
            <ul class="navbar-nav">
                <li>
                    <form class="form-inline my-2 my-lg-0" method="post" action="{{route('for_hire.searchForHire')}}">
                        @csrf
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="search">
                        <div class="input-group mr-sm-2">
                            <select class="custom-select" id="inputGroupSelect01" name="filter">
                                <option selected>Filtro</option>
                                <option value="dni">DNI</option>
                            </select>
                        </div>
                        <button class="btn btn-outline-info my-2 my-sm-2" type="submit">Buscar</button>
                    </form>
                </li>
                <li>
                    <div class="my-sm-2" >
                        <a class="btn btn-success float-right ml-sm-2" href="{{ route('students.index')}}">
                            Realizar un nuevo prestamo
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        {{--Tabla de Prestamos--}}
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">DNI</th>
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
                    <th>{{ $for_hire->student->dni }}</th>
                    <td>{{ $for_hire->student->name }}</td>
                    <td>{{ $for_hire->book->name }}</td>
                    <td>{{ $for_hire->student->career }}</td>
                    <td>{{ $for_hire->student->phone }}</td>
                    <td>{{ $for_hire->student->address }}</td>
                    <td>
                    <td>
                        <form style="display:inline;" action="{{ route('for_hire.destroy', [$for_hire->id, $for_hire->book->id]) }}" method="POST">
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
