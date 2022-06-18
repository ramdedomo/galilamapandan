<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galila Mapandan | Login</title>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href={{asset("assets/favicon.png")}} />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

</head>

<body class="bg-dark">

<div class="container">

    <div class="position-absolute top-50 start-50 translate-middle rounded shadow-md p-3">

    <div class="row align-items-center justify-content-center rounded">
        <div class="col-xl-4 col-xxl-4 d-none d-xl-block text-center" style="margin-right: 100px">
            
            <img class="img-fluid" src={{ asset('assets/login_logo.png') }} alt="..." />
        </div>

        <div class="text-dark bg-light col-12 col-sm-12 col-md-12 col-lg-12 col-xl-5 col-xxl-5 rounded p-3">
                <div class="fw-bold text-galila">LOGIN {{ $session }}</div>
                <p style="font-size: 10px">GALILA MAPANDAN</p>
                <hr>
    
                @if(Session::get('fail'))
                <div class="alert alert-danger">
                {{ Session::get('fail') }}
                </div>
                @endif
    
                <form action="{{ route('logincheck') }}" method="post">
                @csrf
                <span style="font-size: 10px" class="text-danger">@error('username'){{ $message }} @enderror</span>
                <div class="my-2">
                    <input type="text" aria-label="First name" name="username" class="form-control" placeholder="Admin">
                </div>
    
                <span style="font-size: 10px" class="text-danger">@error('password'){{ $message }} @enderror</span>
                <div class="my-2">
                    <input type="password" aria-label="First name" name="password" class="form-control" placeholder="Password">
                </div>
    
                <div class="d-grid gap-2 mt-3">
                    <button class="btn btn-sm text-light" style="background-color: #03C85D" type="submit">Login</button>
                </div>


                </form>
        </div>
    </div>
    </div>




    
</body>
</html>