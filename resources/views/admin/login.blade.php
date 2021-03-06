<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('admin_assets/loginform/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('admin_assets/loginform/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('admin_assets/loginform/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('admin_assets/loginform/css/style.css')}}">

    <title>Login</title>
</head>

<body>


    <br> <br> <br>
    <div class="content">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('admin_assets/loginform/images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign In</h3>
                                <p class="mb-4">please login for better experience</p>
                            </div>
                            <div class="alert ">
                                {{session('msg')}}
                            </div>
                            <form action="{{route('admin.auth')}}" method="post">
                                @csrf
                                <div class="form-group first">
                                    <label for="email">email</label>
                                    <input type="text" class="form-control" id="email" name="email">

                                </div>
                                <br>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">

                                </div>

                                <div class="d-flex mb-3 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>

                                </div>

                                <input type="submit" value="Log In" class="btn btn-block btn-primary">




                            </form>
                            <br>
                            <p>new user?<a style="color:blue " href="/signup">Sign Up</a></p>


                        </div>

                    </div>



                </div>

            </div>

        </div>
    </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>