<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facility;
use App\Models\Schedule;
use App\Models\Notification;

class GymSeeder extends Seeder
{
    public function run(): void
    {
        Facility::create([
            'nama_fasilitas' => 'Alat Fitness Lengkap',
            'deskripsi' => 'Tersedia treadmill, dumbbell, barbell, bench press, dan alat kardio.',
        ]);

        Facility::create([
            'nama_fasilitas' => 'Ruang Ganti',
            'deskripsi' => 'Ruang ganti bersih dan nyaman untuk member.',
        ]);

        Facility::create([
            'nama_fasilitas' => 'Personal Trainer',
            'deskripsi' => 'Member dapat memilih layanan personal trainer.',
        ]);

        Schedule::create([
            'hari' => 'Senin - Jumat',
            'jam_buka' => '06:00',
            'jam_tutup' => '22:00',
            'kelas' => 'Fitness Umum',
        ]);

        Schedule::create([
            'hari' => 'Sabtu - Minggu',
            'jam_buka' => '08:00',
            'jam_tutup' => '20:00',
            'kelas' => 'Fitness dan Cardio',
        ]);

        Notification::create([
            'judul' => 'Promo Member Baru',
            'isi' => 'Daftar member bulan ini mendapatkan diskon 20%.',
            'tanggal' => now(),
        ]);
    }
}