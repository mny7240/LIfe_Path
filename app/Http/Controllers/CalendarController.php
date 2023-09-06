<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendar;

class CalendarController extends Controller
{
    public function index(Calendar $calendar)
    {
        return $calendar->get();
    }
}
