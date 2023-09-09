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
                <p><strong>Name:</strong> John Doe</p>
                <p><strong>Email:</strong> john@example.com</p>
                <p><strong>Introduction:</strong> This is my profile.</p>
                <p><strong>Date of Birth:</strong> January 1, 1990</p>
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
