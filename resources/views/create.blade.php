@extends('layouts.app')

@section('title', 'Criar Item')

@section('content')
    <div>
        <form action="/create" method="post">
            @csrf
            <input type="text" name="name">
            <button type="submit">Criar</button>
        </form>
    </div>
@endsection