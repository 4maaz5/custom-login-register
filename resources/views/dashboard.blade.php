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
<h1 class="text-center" style="background-color: aquamarine;">Welcome to dashboard<a href="{{ route('logout') }}"><button class="btn btn-primary" style="margin-left: 1000px;margin-top:-10px;">Logout</button></a><a href="{{ route('add') }}"><button class="btn btn-primary" style="margin-left: 1230px;margin-top:-105px;">Add User</button></a></h1>

<table class="table table-bordered" style="background-color:white;">
    <tr>
        <th>ID</th>
        <th>UserName</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
    {{-- @foreach($insert as $value)
    <tr>
       <td>{{ $loop->iteration }}</td>
       <td>{{ $value->name }}</td>
       <td>{{ $value->email }}</td>
       <td>{{ $value->password }}</td>
       <td><a href="{{ route('edit',$value->id) }}"><button class="btn btn-primary">Edit</button></a>&nbsp<a href="{{ route('delete',$value->id) }}"><button class="btn btn-danger">Delete</button></a></td>

    @endforeach --}}
</tr>
</table>
{{ $id }}
</body>
</html>
