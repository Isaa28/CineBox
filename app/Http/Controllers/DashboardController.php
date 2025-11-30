<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Room;
use App\Models\MovieSession;
use App\Models\Snack;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMovies = 0;
        $totalRooms = 0;
        $totalSnacks = 0;
        $todaySessions = 0;
        
        try {
            set_time_limit(300); 

            $totalMovies = Movie::count();
            $totalRooms = Room::count();
            $totalSnacks = Snack::count();
            $todaySessions = MovieSession::whereDate('date_time', today())->count();
        } catch (\Exception $e) {
            
        }
        
        return view('dashboard', [
            'totalMovies' => $totalMovies,
            'totalRooms' => $totalRooms,
            'totalSnacks' => $totalSnacks,
            'todaySessions' => $todaySessions,
        ]);
    }
}