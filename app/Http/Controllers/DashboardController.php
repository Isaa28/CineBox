<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Room;
use App\Models\MovieSession;
use App\Models\Snack;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMovies = 0;
        $totalRooms = 0;
        $totalSnacks = 0;
        $todaySessions = 0;

        try {
            $userId = Auth::id();

            $totalMovies = Movie::where('user_id', $userId)->count();
            $totalRooms = Room::where('user_id', $userId)->count();
            $totalSnacks = Snack::where('user_id', $userId)->count();
            $todaySessions = MovieSession::where('user_id', $userId)->whereDate('date_time', today())->count();
        } catch (\Exception $e) {
            
        }

        return view('dashboard', compact('totalMovies','totalRooms','totalSnacks','todaySessions'));
    }
}
