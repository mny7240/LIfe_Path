<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Calendar;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    public function login(Calendar $calendar)
    {
        return view('auth/login');
    }
    
    public function create()
    {
        return view('calendars.create');
    }
    
    public function store(Request $request)
    {
        $request->merge(['user_id' => auth()->id()]);
        Calendar::create($request->all());
        return back()->with('status', '登録しました');
    }
    
    public function index()
    {
        $calendars = Calendar::all();
        $events = [];
        foreach ($calendars as $calendar) {
            $events[] = [
                'id'          => $calendar->id,
                'title'       => $calendar->title,
                'description' => $calendar->description,
                'start'       => $calendar->start_date,
                'end'         => Carbon::parse($calendar->end_date)->addDay()->format('Y-m-d'),
                'backgroundColor' => 'blue',
                'textColor' => 'white',
                'borderColor' => 'black',
                'url' => route('calendars.calendar_edit', $calendar->id)
            ];
        }
        
        return view("calendars.index", compact('events'));
    }
    
    public function updateByCalendar(Request $request, Calendar $calendar)
    {
        $request->merge([
            'start_date' => Carbon::parse($request->start_date),
            'end_date' => Carbon::parse($request->end_date)->subDay()
        ]);
        $calendar->update($request->all());
        return response()->json(['success' => true]);
    }
    
    public function top(Calendar $calendar)
    {
        return view('calendars/index');
    }
    
    public function edit($id)
    {
        return view('calendars/calendar_edit');
    }
    
}
?>
