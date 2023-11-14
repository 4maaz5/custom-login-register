<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <!-- JS, Popper.js, and jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</head>

<body>
    <br><br>
    <br><br>
    <!-- Admin Login Form-->
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
        <div class="row justify-content-center align-items-center inner-row">
            <div class="col-md-5">
                <div class="form-box p-5">
                    <div class="form-title">
                        <h2 class="fw-bold mb-5"><b>Login</b></h2>
                    </div>
                    <div id="error"></div>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control form-control-sm" placeholder="UserName"
                                id="floatingInput" name="email">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control form-control-sm" placeholder="password"
                                id="floatingPassword" name="password">

                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="mt-3">
                            <input type="submit" class="btn btn-primary text-white" value="Login">
                        </div>
                        <span><a href="{{ route('register') }}">Register</a></span>
                    </form>
                    @if (session()->has('success'))
                        {{ 'Registered Successfully!' }}
                    @endif
</body>

</html>
