<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('login-asset') }}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ url('login-asset') }}/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('login-asset') }}/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{ url('login-asset') }}/css/style.css">

    <title>Jne App</title>
</head>

<body>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2"
            style="background-image: url('{{ url('login-asset') }}/images/joni.png'); background-size: cover;"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3>Login to <strong>JneApp</strong></h3>
                        <p class="mb-4">Sistem Informasi jne cabang ketepang</p>
                        @include('utils.notif')
                        <form action="{{ url('login') }}" method="post">
                            @csrf
                            @if (isset($message))
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @endif
                            @csrf
                            <div class="form-group first">
                                <label for="userid">User Id</label>
                                <input type="text" class="form-control" name="user_id">
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" checked="checked" name="remember" />
                                    <div class="control__indicator"></div>
                                </label>
                            </div>

                            <input type="submit" value="Log In" class="btn btn-block btn-primary">

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="{{ url('login-asset') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ url('login-asset') }}/js/popper.min.js"></script>
    <script src="{{ url('login-asset') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('login-asset') }}/js/main.js"></script>
</body>

</html>
