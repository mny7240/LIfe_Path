<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mypage;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function index()
    {
        return view('calendar/mypage');
    }
    
    public function showProfile()
    {
    $user = Auth::user(); // 認証されたユーザーを取得
    return view('calendar/profiles.show', compact('user'));
    }
    
    public function edit()
    {
        return view('calendar/edit');
    }
}




