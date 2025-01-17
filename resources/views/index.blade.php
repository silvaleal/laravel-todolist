@extends('layouts.app')

@section('title', 'Lista de Itens')

@section('content')
    <h1>Lista de Itens</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Criação</th>
                    <th>Atualização</th>
                    <th>Funções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->created_at->diffForHumans() }}</td>
                    <td>{{ $item->updated_at->diffForHumans() }}</td>
                    <td><a href=" {{route('update', $item->id)}}">Editar</a></td>
                    <td><a href=" {{route('delete', $item->id)}}">Deletar</a></td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection
