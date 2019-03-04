@extends('layouts.app')

@section('content')
    <title>Libros</title>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ISBN</th>
            <th scope="col">Nombre</th>
            <th scope="col">Editorial</th>
            <th scope="col">Edición</th>
            <th scope="col">Autor</th>
            <th scope="col">Categoría</th>
            {{--<th scope="col"></th>
            <th scope="col"></th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->name }}</td>
                <td>{{ $book->publisher }}</td>
                <td>{{ $book->edition }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->category }}</td>
                {{--<td><a class="btn btn-warning" href="{{ route('books.edit', $book->isbn) }}">Editar</a></td>
                <td>
                    <form style="display:inline;" action="{{ route('books.destroy', $book->isbn) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection