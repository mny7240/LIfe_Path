<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thing;

class ThingController extends Controller
{
    public function index(Thing $thing )
    {
        return $calendardiary->get();
    }
}
