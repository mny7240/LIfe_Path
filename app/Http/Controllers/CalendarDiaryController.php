<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalendarDiary;

class CalendarDiaryController extends Controller
{
    public function index(CalendarDiary $calendardiary)
    {
        return $calendardiary->get();
    }
}
