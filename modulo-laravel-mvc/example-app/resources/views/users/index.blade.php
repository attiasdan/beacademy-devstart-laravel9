<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Listagem de Usuários</title>
    <style>
        body {
            background-color: #333333;
            color: whitesmoke;
            padding: 40px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Listagem de Usuários</h1>
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
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>