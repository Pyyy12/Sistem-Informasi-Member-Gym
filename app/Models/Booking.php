<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'tanggal_booking',
        'jam_booking',
        'paket',
        'durasi_jam',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}