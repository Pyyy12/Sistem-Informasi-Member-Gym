<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'hari',
        'jam_buka',
        'jam_tutup',
        'kelas',
    ];
}