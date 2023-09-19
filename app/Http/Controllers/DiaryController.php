<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;
use App\Http\Requests\DiaryRequest;
use Illuminate\Support\Facades\Auth;


class DiaryController extends Controller
{
    public function index(Diary $diary)
    {
        return view('calendar/diary')->with(['diaries' => $diary->getPaginateByLimit(1)]);
    }
    
    public function show(Diary $diary)
    {
        return view('calendar/diary')->with(['diaries' => $diary]);
    }
    
    public function store(DiaryRequest $request, Diary $diary)
    {
        $input = $request['diary'];
        $id=Auth::id();
        $input += ['user_id' => $id];
        $diary->fill($input)->save();
        return view('calendar/diary')->with(['diaries' => $diary->get()]);
    }
}