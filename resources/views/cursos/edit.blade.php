@extends('layout.plantilla')

@section('title', 'Editar curso')

@section('content')
    <h1>En esta página podrás editar un curso</h1>
    

    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @csrf
        @method('put')
        
        <label for="">Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
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
            <textarea name="description" rows="5">{{old('description', $curso->description)}}</textarea>
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
            <input type="text" name="category" value={{old('category', $curso->category)}}>
        </label>

        @error('category')
            <br>
            <span>*{{$message}}</small>
            <br>    
        @enderror

        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection