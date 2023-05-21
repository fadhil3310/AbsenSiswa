<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container text-center">
        <div class="row align-item-center">
            <div class="col card">
                <div class="card-body">
                    <h1>Login</h1>
                    <form action="{{ url('login') }}" method="post">
                        @csrf
                        <label for='email'>ID User:</label>
                        <input type='email' name='email' id='email'>
                        <label for='password'>Password:</label>
                        <input type='text' name='password' id='password'>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
