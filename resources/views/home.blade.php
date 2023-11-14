<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>{{ __('homee.name') }}</h1>
    <h3>{{ __('homee.home') }}</h3>
    <a href="{{ route('hometwo') }}"><button class="btn btn-primary">English</button></a>
    <a href="{{ route('home') }}"><button class="btn btn-primary">Urdu</button></a>
</body>
</html>
