<!DOCTYPE html>
<html>
<head>
    <title>Booking Gym</title>
</head>
<body>

<h2>Form Booking Sewa Gym</h2>

<form method="POST" action="{{ route('booking.store') }}">
    @csrf

    <label>Tanggal Booking</label><br>
    <input type="date" name="tanggal_booking"><br><br>

    <label>Jam Booking</label><br>
    <input type="time" name="jam_booking"><br><br>

    <label>Paket</label><br>
    <select name="paket">
        <option value="">-- Pilih Paket --</option>
        <option value="Harian">Harian</option>
        <option value="Mingguan">Mingguan</option>
        <option value="Bulanan">Bulanan</option>
        <option value="Personal Trainer">Personal Trainer</option>
    </select><br><br>

    <label>Durasi Jam</label><br>
    <input type="number" name="durasi_jam" min="1"><br><br>

    <button type="submit">Simpan Booking</button>
</form>

</body>
</html>