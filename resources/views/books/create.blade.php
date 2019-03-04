@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Libros</h1>
        <hr style="background-color: #1b1e21">
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <label for="">
                ISBN
                <input class="form-control" type="text" name="isbn" value="{{ old('isbn') }}">
                {!! $errors->first('isbn','<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <label for="">
                Nombre
                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                {!! $errors->first('name','<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <label for="">
                Editorial
                <input class="form-control" type="text" name="publisher" value="{{ old('publisher') }}">
                {!! $errors->first('publisher','<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <label for="">
                Edición
                <input class="form-control" type="text" name="edition" value="{{ old('edition') }}">
                {!! $errors->first('edition','<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <label for="">
                Autor
                <input class="form-control" type="text" name="author" value="{{ old('author') }}">
                {!! $errors->first('author','<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <label for="">
                Categoría
                <input class="form-control" type="text" name="category" value="{{ old('category') }}">
                {!! $errors->first('category', '<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <input class="btn btn-primary" type="submit" value="{{ 'Guardar' }}">
            <a class="btn btn-danger" href="{{ route('books.index') }}">Cancelar</a>
        </form>
        <hr>
    </div>
@endsection