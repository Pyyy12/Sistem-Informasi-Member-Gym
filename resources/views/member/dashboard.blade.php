<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Member</title>
</head>
<body>

<h2>Dashboard Member</h2>

<p>Selamat datang, {{ Auth::user()->name }}</p>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<a href="{{ route('booking.create') }}">Booking Gym</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Tanggal</th>
        <th>Jam</th>
        <th>Paket</th>
        <th>Durasi</th>
        <th>Status</th>
    </tr>

    @foreach($bookings as $booking)
        <tr>
            <td>{{ $booking->tanggal_booking }}</td>
            <td>{{ $booking->jam_booking }}</td>
            <td>{{ $booking->paket }}</td>
            <td>{{ $booking->durasi_jam }} Jam</td>
            <td>{{ $booking->status }}</td>
        </tr>
    @endforeach
</table>

<br>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

</body>
</html>