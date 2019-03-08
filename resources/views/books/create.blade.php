@extends('layouts.app')

@section('content')
    <div class="container-fluid col-md-6 col-md-offset-3 text-center">
        <h1>Cargar libro</h1>
        <hr style="background-color: #1b1e21">
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <label for="" class="text-left">
                ISBN
                <input class="form-control" type="text" name="isbn" value="{{ old('isbn') }}" required>
                {!! $errors->first('isbn','<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <label for="" class="text-left">
                Nombre
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" required>
                {!! $errors->first('name','<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <label for="" class="text-left">
                Editorial
                <input class="form-control" type="text" name="publisher" value="{{ old('publisher') }}" required>
                {!! $errors->first('publisher','<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <label for="" class="text-left">
                Edición
                <input class="form-control" type="text" name="edition" value="{{ old('edition') }}" required>
                {!! $errors->first('edition','<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <label for="" class="text-left">
                Autor
                <input class="form-control" type="text" name="author" value="{{ old('author') }}" required>
                {!! $errors->first('author','<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <label for="" class="text-left">
                Categoría
                <input class="form-control" type="text" name="category" value="{{ old('category') }}" required>
                {!! $errors->first('category', '<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <input class="btn btn-primary" type="submit" value="{{ 'Guardar' }}">
            <a class="btn btn-danger" href="{{ route('books.index') }}">Cancelar</a>
        </form>
        <hr>
    </div>
@endsection