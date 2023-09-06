<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calender;

class CalenderController extends Controller
{
    public function index(Calender $calendar)
    {
        return $calendar->get();
    }
}
