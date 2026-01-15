<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function edit(Booking $booking)
    {
        return view('pages.admin_edit', compact('booking'));
    }

}
