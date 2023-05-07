<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset("assets/fonts/fontawesome-all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/fonts/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/fonts/fontawesome5-overrides.min.css") }}">
</head>
<body class="bg-gradient-primary">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;{{ asset("assets/img/dogs/image3.jpeg&quot") }};);"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4">Welcome Back!</h4>
                                </div>
                                <form  action="{{ url("login") }}" method="post">
                                    @if(!empty(request('message')))
                                        <div class="text-center">
                                          <h6 class="text-danger mb-4 ">{{ request('message') }}</h6>
                                        </div>
                                    @endif
                                    @csrf
                                    <div class="mb-3"><input class="form-control form-control-user" type="email"  value="anjary@gmail.com" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email"></div>
                                    <div class="mb-3"><input class="form-control form-control-user" type="password" value="anjary" id="exampleInputPassword" placeholder="Password" name="password"></div>
                                    <div class="mb-3">
                                        <div class="custom-control custom-checkbox small">
                                            <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                        </div>
                                    </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset("assets/bootstrap/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("assets/js/theme.js") }}"></script>
</body>

</html>
