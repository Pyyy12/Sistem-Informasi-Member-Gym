<!DOCTYPE html>
<html>
<head>
    <title>Login Member</title>
</head>
<body>

<h2>Login Member</h2>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

@if(session('error'))
    <p style="color:red;">{{ session('error') }}</p>
@endif

<form method="POST" action="{{ route('login.process') }}">
    @csrf

    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>

    <button type="submit">Login</button>
</form>

<a href="{{ route('register') }}">Belum punya akun? Daftar</a>

</body>
</html>