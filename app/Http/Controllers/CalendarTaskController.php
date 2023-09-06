<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalendarTask

class CalendarTaskController extends Controller
{
    public function index(CalendarTask $calendartask)
    {
        return $calendartask->get();
    }
}
