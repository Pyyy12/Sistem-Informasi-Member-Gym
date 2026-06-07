<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function dashboard()
    {
        $bookings = Booking::where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('member.dashboard', compact('bookings'));
    }

    public function create()
    {
        return view('member.booking');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_booking' => 'required|date',
            'jam_booking' => 'required',
            'paket' => 'required',
            'durasi_jam' => 'required|integer|min:1',
        ]);

        Booking::create([
            'user_id' => Auth::id(),
            'tanggal_booking' => $request->tanggal_booking,
            'jam_booking' => $request->jam_booking,
            'paket' => $request->paket,
            'durasi_jam' => $request->durasi_jam,
            'status' => 'pending',
        ]);

        return redirect()->route('member.dashboard')
            ->with('success', 'Booking berhasil dibuat.');
    }
}