@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('body')
    <h1>Listagem de Usuários</h1>
    
    <div class="container">
        <div class="row">
            <div class="col-sm mt-2 mb-5">
                <a href="{{ route('users.create') }}" class="btn btn-success">Novo Usuário</a>
            </div>
            <div class="col-sm mt-2 mb-5">
                <form action="{{ route('users.index') }}" method="GET">
                    <div class="input-group bg-white rounded">
                        <input type="search" class="form-control rounded" name="search">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <table class="table text-white">
        <thead>
            <tr>
                <th scope="col">FOTO</th>
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
                    <th>
                        @if($user->image)
                            <img src="{{ asset('storage/'.$user->image) }}" width="75px" height="75px" alt="{{ $user->name }}" class="rounded-circle">
                        @else
                            <img src="{{ asset('storage/profile/avatar.png') }}" width="75px" height="75px" alt="sem foto" class="rounded-circle">
                        @endif
                    </th>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                    <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-info">VISUALIZAR</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
@endsection