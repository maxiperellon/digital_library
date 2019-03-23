@extends('layouts.app')
@section('content')
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
                     <a class="btn btn-secondary" href="{{ route('books.show', $book->id) }}">
                         <i class="fas fa-eye"></i>
                     </a>
                 </td><td>
                     <a class="btn btn-success" href="{{ route('books.edit', $book->id) }}">
                         <i class="fas fa-edit"></i>
                     </a>
                 </td>
                 @if(auth()->user()->role === 'admin')
                     <td>
                         <form style="display:inline;" action="{{ route('books.destroy', $book->id) }}" method="POST">
                             @csrf
                             @method('delete')
                             <button class="btn btn-danger" type="submit">
                                 <i class="fas fa-trash-alt"></i>
                             </button>
                         </form>
                     </td>
                 @endif
             </tr>
         @endforeach
    </table>
@endsection

