<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Via cep</title>
</head>
<body>
    <div>
        <form action="{{ route('viacep.index.post') }}" method="post">
            @csrf
            <input type="text" name="cep" id="">
            <button type="submit">ENVIAR</button>
        </form>
    </div>
</body>
</html>