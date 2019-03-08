@extends('layouts.app')

@section('content')
    <div class="container-fluid col-md-6 col-md-offset-3 text-center">
        <h1>Alumnos de la Universidad</h1>
        <hr style="background-color: #1b1e21">
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <label for="" class="text-left">
                Dni
                <input class="form-control" type="text" name="dni" value="{{ old('dni') }}" required>
                {!! $errors->first('dni','<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <label for="" class="text-left">
                Nombre
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" required>
                {!! $errors->first('name','<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <label for="" class="text-left">
                Carrera
                <input class="form-control" type="text" name="career" value="{{ old('career') }}" required>
                {!! $errors->first('career','<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <label for="" class="text-left">
                Email
                <input class="form-control" type="text" name="email" value="{{ old('email') }}" required>
                {!! $errors->first('email','<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <label for="" class="text-left">
                Telefono
                <input class="form-control" type="text" name="phone" value="{{ old('phone') }}" required>
                {!! $errors->first('phone','<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <label for="" class="text-left">
                Direccion
                <input class="form-control" type="text" name="address" value="{{ old('address') }}" required>
                {!! $errors->first('address', '<span class="text-danger error">:message</span>') !!}
            </label>
            <br>
            <input class="btn btn-primary" type="submit" value="{{ 'Guardar' }}">
            <a class="btn btn-danger" href="{{ route('students.index') }}">Cancelar</a>
        </form>
        <hr>
    </div>
@endsection
