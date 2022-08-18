@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('body')
    <h1>Listagem de Usuários</h1>
    <a href="{{ route('users.create') }}" class="btn btn-success">Novo Usuário</a>
    <table class="table text-white">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">E-MAIL</th>
            <th scope="col">DATA CADASTRO</th>
            <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                    <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-info">VISUALIZAR</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection