@extends('layout.plantilla')

@section('title', 'Editar curso')

@section('content')
    <h1>En esta página podrás editar un curso</h1>
    

    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @csrf
        @method('put')
        
        <label for="">Nombre:
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>

        <br>
        <label for="">
            Descripción:
            <br>
            <textarea name="description" rows="5">{{$curso->description}}</textarea>
        </label>

        <br>
        <label for="">
            Categoria:
            <br>
            <input type="text" name="category" value={{$curso->category}}>
        </label>
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection