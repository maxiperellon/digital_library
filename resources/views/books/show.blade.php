@extends('layouts.app')
@section('content')
    <div class="container-fluid col-md-6 col-md-offset-3 text-center">
        <h1> Libro </h1>
        <hr style="background-color: #1b1e21">
        <form action="{{ route('books.show',$book->id) }}" method="POST">
            @csrf
            <br>
            <label for="" class="text-left">
                ISBN
                <input class="form-control" type="text" name="isbn" value="{{$book->isbn}}" disabled>
            </label>
            <br>
            <label for="" class="text-left">
                Nombre
                <input class="form-control" type="text" name="name" value="{{$book->name}}" disabled>
            </label>
            <br>
            <label for="" class="text-left">
                Editorial
                <input class="form-control" type="text" name="publisher" value="{{$book->publisher}}" disabled>
            </label>
            <br>
            <label for="" class="text-left">
                Edición
                <input class="form-control" type="text" name="edition" value="{{$book->edition }}" disabled>
            </label>
            <br>
            <label for="" class="text-left">
                Autor
                <input class="form-control" type="text" name="author" value="{{$book->author }}" disabled>
            </label>
            <br>
            <label for="" class="text-left">
                Categoría
                <input class="form-control" type="text" name="category" value="{{$book->category }}" disabled>
            </label>
            <br>
            <a class="btn btn-danger" href="{{ route('books.index') }}">Cancelar</a>
        </form>
        <hr>
    </div>
@endsection
