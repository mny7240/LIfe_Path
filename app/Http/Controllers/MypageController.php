<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mypage;

class MypageController extends Controller
{
    public function index()
    {
        return view('calendar/mypage');
    }
    
    public function edit()
    {
        return view('calendar/edit');
    }
}



