<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalendarThing;

class CalendarThingController extends Controller
{
    public function index(CalendarThing $calendarthing)
    {
        return $calendarthing->get();
    }
}
