<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/libs/css/style.css">
    <link rel="stylesheet" href="/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
     
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registrations Form</h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
                <div class="form-group ">
                    <input id="fname" type="text"
                        class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname"
                        placeholder="First Name" value="{{ old('fname') }}" required autocomplete="name" autofocus>
                    @error('fname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group ">
                    <input id="lname" type="text"
                        class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname"
                        placeholder="Last Name" value="{{ old('lname') }}" required autocomplete="name" autofocus>
                    @error('lname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group ">
                    <input id="email" type="email"
                        class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                        placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group ">
                    <input id="password" type="password"
                        class="form-control form-control-lg @error('password') is-invalid @enderror" name="password"
                        required autocomplete="new-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group ">
                    <input id="password-confirm" type="password" class="form-control form-control-lg"
                        placeholder="Confirm password" name="password_confirmation" required
                        autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By
                            creating an account, you agree the <a href="#">terms and conditions</a></span>
                    </label>
                </div>

                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit"> {{ __('Register') }}</button>
                </div>


            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="/login" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>



</body>

</html>
