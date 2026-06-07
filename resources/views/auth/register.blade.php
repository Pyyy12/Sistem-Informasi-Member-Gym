<!DOCTYPE html>
<html>
<head>
    <title>Daftar Member</title>
</head>
<body>

<h2>Daftar Member Gym</h2>

<form method="POST" action="{{ route('register.process') }}">
    @csrf

    <input type="text" name="name" placeholder="Nama Lengkap"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password"><br><br>

    <button type="submit">Daftar</button>
</form>

<a href="{{ route('login') }}">Sudah punya akun? Login</a>

</body>
</html>