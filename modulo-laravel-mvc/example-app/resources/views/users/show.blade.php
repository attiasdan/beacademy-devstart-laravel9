@extends('template.users')
@section('title', 'Visualizar '.$user->name)
@section('body')
    <h1>Usuário {{ $user->name }}</h1>
    <table class="table text-white text-center">
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
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">EDITAR</a>

                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETAR</button>
                    
                    </form>

                </td>
            </tr>
        </tbody>
    </table>
@endsection