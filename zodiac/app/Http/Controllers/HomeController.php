<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    function index() {
        $date = Carbon::now()->format('Y-m-d');
        $zodiac = config('constants');
        $title = 'Дневен хороскоп | '.config('app.name'); 
        return view('home', compact('zodiac', 'date' ,'title'));
    }
}
