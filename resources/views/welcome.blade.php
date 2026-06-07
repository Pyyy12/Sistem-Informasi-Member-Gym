<!DOCTYPE html>
<html>
<head>
    <title>Booking Sewa Gym Online</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            background: #f4f4f4;
        }

        .navbar {
            background: #111827;
            color: white;
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-weight: bold;
        }

        .hero {
            background: #1f2937;
            color: white;
            padding: 70px 40px;
            text-align: center;
        }

        .hero h1 {
            font-size: 42px;
        }

        .btn {
            background: #f97316;
            padding: 12px 22px;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
        }

        .section {
            padding: 40px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 3px 8px rgba(0,0,0,.1);
        }

        table {
            width: 100%;
            background: white;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            background: #111827;
            color: white;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div><b>GYM ONLINE</b></div>
    <div>
        <a href="/">Home</a>
        @auth
            <a href="{{ route('member.dashboard') }}">Dashboard</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Daftar Member</a>
        @endauth
    </div>
</div>

<div class="hero">
    <h1>Booking Sewa Gym Secara Online</h1>
    <p>Daftar sebagai member, pilih jadwal, lalu lakukan booking gym dengan mudah.</p>
    <a href="{{ route('booking.create') }}" class="btn">Booking Sekarang</a>
</div>

<div class="section">
    <h2>Notifikasi / Pemberitahuan</h2>

    @foreach($notifications as $notif)
        <div class="card" style="margin-bottom:10px;">
            <h3>{{ $notif->judul }}</h3>
            <p>{{ $notif->isi }}</p>
            <small>{{ $notif->tanggal }}</small>
        </div>
    @endforeach
</div>

<div class="section">
    <h2>Fasilitas Gym</h2>

    <div class="grid">
        @foreach($facilities as $facility)
            <div class="card">
                <h3>{{ $facility->nama_fasilitas }}</h3>
                <p>{{ $facility->deskripsi }}</p>
            </div>
        @endforeach
    </div>
</div>

<div class="section">
    <h2>Jadwal Gym</h2>

    <table>
        <tr>
            <th>Hari</th>
            <th>Jam Buka</th>
            <th>Jam Tutup</th>
            <th>Kelas</th>
        </tr>

        @foreach($schedules as $schedule)
            <tr>
                <td>{{ $schedule->hari }}</td>
                <td>{{ $schedule->jam_buka }}</td>
                <td>{{ $schedule->jam_tutup }}</td>
                <td>{{ $schedule->kelas }}</td>
            </tr>
        @endforeach
    </table>
</div>

</body>
</html>