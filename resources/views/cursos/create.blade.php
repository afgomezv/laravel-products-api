@extends('layout.plantilla')

@section('title', 'Crear curso')

@section('content')
    <h1>En esta página podrás crear un curso</h1>
    

    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        
        <label for="">Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <span>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label for="">
            Descripción:
            <br>
            <textarea name="description" rows="5">{{old('description')}}</textarea>
        </label>

        @error('description')
            <br>
            <span>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label for="">
            Categoria:
            <br>
            <input type="text" name="category" value="{{old('category')}}">
        </label>

        @error('category')
            <br>
            <span>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection


