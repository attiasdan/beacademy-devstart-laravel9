@extends('template.users')
@section('title', 'Listagem de Postagens')
@section('body')
    <h1>Listagem de Postagens</h1>

    {{-- <a href="{{ route('users.create') }}" class="btn btn-success">Novo Usuário</a> --}}

    <table class="table text-white">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TITULO</th>
                <th scope="col">POSTAGEM</th>
                <th scope="col">DATA CADASTRO</th>
                <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->post }}</td>
                    <td>{{ date('d/m/Y', strtotime($post->created_at)) }}</td>
                    <td>
                        <a href="{{ route('users.show', $post->id) }}" class="btn btn-info">VISUALIZAR</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">
        {{-- {{ $posts->links('pagination::bootstrap-4') }} --}}
    </div>
@endsection