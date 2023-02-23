<?php

namespace App\Http\Controllers;
use App\Models\ZodiacModel; 
use Illuminate\Http\Request;
use Carbon\Carbon;

class Zodiac extends Controller
{
    //
    public function single($slug, $date) {
        $signs = config('constants');
        
        if(!array_key_exists($slug, $signs)) {
            return redirect('/');
        } elseif(!strtotime($date)) {
            return redirect('/');
        }
    
        $zodiac = ZodiacModel::where('sign', $slug)->where('zodiac_date', $date)->first();
        if(!$zodiac) {
            return redirect('/');
        }

        $date = Carbon::now()->format('Y-m-d');
        $zodiac_list = config('constants');
        $title = 'Дневен хороскоп за '.$zodiac_list[$slug].' '.$date.' | '.config('app.name'); 
        $page_title = 'Дневен хороскоп за '.$zodiac_list[$slug].' '.$date; 
        return view('zodiac', compact('zodiac', 'title', 'zodiac_list', 'page_title', 'date'));
    }
}
