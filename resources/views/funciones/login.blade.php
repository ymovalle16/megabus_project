<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('log.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Iniciar Sesión</title>
    <link rel="icon" type="ima/png" href="{{asset('img/logo.png')}}">
</head>

<style>
    body{
        background-color: #00a85a;
    }

    .container{
        width: 500px;
        height: 400px;
        margin: 100px 0 0 0;
        box-shadow: 0px 12px 25px 3px rgba(0,0,0,0.4);
    }

    .logo{
        margin: 20px 0 0 0;
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .logo img{
        width: 140px;
    }

    .form-control input:focus{
        outline: none;
        box-shadow: none;
        border: 1px solid #00a85a;
    }

    footer{
        margin: 90px 0 0 0;
        background-color: #ffffff85;
    }
</style>

<body>
    <!-- Mostrar errores si existen -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container bg-light mx-auto border">
        <div class="logo">
            <img src="{{ asset ('img/logo.png')}}" class="shadow" alt="">
        </div>

        <form action="{{ route('validacion') }}" class="form-control border-0 mt-5 bg-light" method="POST">
            @csrf 
            <div class="w-75 mx-auto text-center d-block">
                <input name="identification" class="form-control" type="number" placeholder="Documento de identidad *" required>
                <button type="submit" class="btn btn-success mt-5">Iniciar Sesión</button>
            </div>
        </form>
    </div>
    <footer class="w-100 p-2">
        <p class="text-center">© 2024 Copyright: YMO </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>