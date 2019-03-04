@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h1> Editar libro </h1>
        <hr style="background-color: #1b1e21">
        <form action="{{ route('books.update',$book->id) }}" method="POST">
            @csrf
            @method('patch')
            <br>
            <label for="">
                ISBN
                <input class="form-control" type="text" name="isbn" value="{{$book->isbn}}">
                {!! $errors->first('isbn','<span class=error>:message</span>') !!}
            </label>
            <br>
            <label for="">
                Nombre
                <input class="form-control" type="text" name="name" value="{{$book->name}}" >
                {!! $errors->first('name','<span class=error>:message</span>') !!}
            </label>
            <br>
            <label for="">
                Editorial
                <input class="form-control" type="text" name="publisher" value="{{$book->publisher}}" >
                {!! $errors->first('publisher','<span class=error>:message</span>') !!}
            </label>
            <br>
            <label for="">
                Edición
                <input class="form-control" type="text" name="edition" value="{{$book->edition }}" >
                {!! $errors->first('edition','<span class=error>:message</span>') !!}
            </label>
            <br>
            <label for="">
                Autor
                <input class="form-control" type="text" name="author" value="{{$book->author }}" >
                {!! $errors->first('author','<span class=error>:message</span>') !!}
            </label>
            <br>
            <label for="">
                Categoría
                <input class="form-control" type="text" name="category" value="{{$book->category }}" >
                {!! $errors->first('category', '<span class=error>:message</span>') !!}
            </label>
            <br>
            <input class="btn btn-primary" type="submit" value="{{ 'Guardar ' }}">
            <a class="btn btn-danger" href="{{ route('books.index') }}">Cancelar</a>

        </form>
        <hr>
    </div>
@endsection