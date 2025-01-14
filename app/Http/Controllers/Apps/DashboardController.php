<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('apps.dashboard');
    }

    public function registration()
    {
        return view('apps.registration');
    }

    public function checkin()
    {
        return view('apps.check-in');
    }
}