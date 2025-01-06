@extends('layout.plantilla')

@section('title', 'Crear curso')

@section('content')
    <h1>En esta página podrás crear un curso</h1>
    

    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        
        <label for="">Nombre:
            <br>
            <input type="text" name="name">
        </label>

        <br>
        <label for="">
            Descripción:
            <br>
            <textarea name="description" rows="5"></textarea>
        </label>

        <br>
        <label for="">
            Categoria:
            <br>
            <input type="text" name="category">
        </label>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection


