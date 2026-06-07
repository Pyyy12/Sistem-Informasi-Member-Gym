<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Schedule;
use App\Models\Notification;

class HomeController extends Controller
{
    public function index()
    {
        $facilities = Facility::latest()->get();
        $schedules = Schedule::all();
        $notifications = Notification::latest()->get();

        return view('welcome', compact(
            'facilities',
            'schedules',
            'notifications'
        ));
    }
}