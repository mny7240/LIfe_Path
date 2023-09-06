<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalendarPlace;

class CalendarPlaceController extends Controller
{
    public function index(CalendarPlace $calendarplace)
    {
        return $calendarplace->get();
    }
}
