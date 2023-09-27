@extends('layouts.app')

@section('diary')
<link rel="stylesheet" href="{{ asset('css/diary.css') }}">
    <div class='header'>
        <nav>
            <ul>
            <li><a href='/'><button>top</button></a></li>
            <li><a href='/diary'><button>日記作成</button></a></li>
            <li><a href='/thing'><button>欲しいもの</button></a></li>
            <li><a href='/place'><button>行きたいところ</button></a></li>
            </ul>
        </nav>
    </div>
    <main>
        <aside>
            <h1>日記作成</h1>
            <form action="/calendar" method="POST">
                @csrf
                <div class="date">
                    <h2>日付</h2>
                    <input type="date" name="diary[created_at]">
                    <p class='date__error' style="color:red">{{ $errors->first('diary.created_at') }}</p>
                </div>
                <div class='title'>
                    <h2>タイトル</h2>
                    <input type="text" name=diary[title] placeholder="タイトル" value="{{ old('diary.title') }}">
                    <p class='title__error' style="color:red">{{ $errors->first('diary.title') }}</p>
                </div>
                <div class="content">
                    <h2>内容</h2>
                    <textarea name="diary[content]" placeholder="内容">{{ old('diary.content') }}</textarea>
                    <p class='content__error' style="color:red">{{ $errors->first('diary.content') }}</p>
                </div>
                <input type="submit" value="store">
            </form>
        </aside>
        <article>
            <h2>日記</h2>
        </article>
    </main>
@endsection

