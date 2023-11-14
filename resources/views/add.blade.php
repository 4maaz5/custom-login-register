<!DOCTYPE html>

<body>

    <head>
        <title>Login&Signup</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Register</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- CSS only -->
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

        <!-- JS, Popper.js, and jQuery (optional) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    </head>
    <style type="text/css">
        /*Login form css*/
        /* body {
            font-family: "Roboto", sans-serif;
            background: linear-gradient(90deg, rgba(141, 194, 111, 1)0%, rgba(118, 184, 82, 1)50%);
        } */
        body{
            margin-top: -120px;
        }
        .inner-row {
            height: 100vh;
        }

        .primarybg {
            background: rgba(141, 194, 111, 1);
        } */

        /* .primarybg:hover {
            background-color: green;
        }

        .primaryColor {
            color: rgba(141, 194, 111, 1);
        }

        .form-box {
            background: #fff;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
    </style>
    <div class="container">
        <div class="mt-5">
            @if ($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        @if (session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if (session()->has('success'))
            <div class="alert alert-danger">{{ session('success') }}</div>
        @endif
        <div class="row justify-content-center align-items-center inner-row">
            <div class="col-md-5">
                <div class="form-box p-5">
                    <div class="form-title">
                        <h2 class="fw-bold mb-4"><b>Create your Account</b></h2>
                    </div>
                    /* <div id="error" style="margin-left: 8px;"> </div> */
                    <form action="" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control " placeholder="UserName" id="UserName"
                                name="name">
                            <label for="floatingInput">UserName</label>
                            @error('uname')
                                {{ 'The username is required' }}
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control form-control-sm" placeholder="Email"
                                id="lastName" name="email">
                            <label for="floatingInput">Email</label>
                        </div>
                        @error('email')
                            {{ 'The email is required' }}
                        @enderror
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control form-control-sm" placeholder="Password"
                                id="email" name="password">
                            <label for="floatingInput">Password</label>
                        </div>
                        @error('password')
                            {{ 'Password is required' }}
                        @enderror
                        <div class="form-floating mb-3">
                            {{-- <input type="password" class="form-control form-control-sm" placeholder="Confirm Password" id="Password" name="confirm">
                        <label for="floatingPassword">Confirm Password</label> --}}
                            {{-- {{ $message }} --}}
                        </div>
                        @error('confirm')
                            {{ 'Confirm password is required' }}
                        @enderror
                        <div class="mt-3">
                            <button class="btn primarybg text-white"> Register</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
