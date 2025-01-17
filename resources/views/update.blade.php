@extends('layouts.app')
@section('title', 'Edição de item')

@section('content')
    <h2>Editando um item</h2>
    <form action="/update/{{$item->id}}" method="post">
        @csrf
        <input type="text" name="name" value="{{$item->name}}">
        <button type="submit">Confirmar</button>
    </form>
@endsection