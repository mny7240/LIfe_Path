<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Mypage</title>
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
</head>
<body class="antialiased">
    <header>
        <h1>マイページ</h1>
    </header>

    <div class="container">
        <div class="profile-box">
            <div class="profile-header">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile Image" class="profile-image">
                <h2>User Profile</h2>
            </div>
            <div class="profile-info">
                <p><strong>名前:</strong>長江　愛哉</p>
                <p><strong>Email:</strong>xxxxxxxx@gmail.com</p>
                <p><strong>自己紹介:</strong>よろしくお願いいたします。</p>
                <p><strong>誕生日:</strong>2002 04/27</p>
                <div class='edit'>
                    <a href="/calendar/edit" class="button">プロフィール編集</a>
                </div>
            </div>
        </div>
    </div>
    <a href="/">topに戻る</a>
    <footer>
        &copy; 2023 MyPage
    </footer>
</body>
</html>
