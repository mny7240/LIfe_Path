<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="{{ asset('css/edit_profile.css') }}">
</head>
<body>
    <header>
        <h1>プロフィール編集</h1>
    </header>

    <div class="container">
        <div class="profile-box">
            <form action="/update-profile" method="POST">
                @csrf
                <h2>あなたのプロフィール</h2>
                <div class="form-group">
                    <label for="name">名前:</label>
                    <input type="text" id="name" name="name" value="John Doe">
                </div>
                <div class="form-group">
                    <label for="email">メールアドレス:</label>
                    <input type="email" id="email" name="email" value="john@example.com">
                </div>
                <div class="form-group">
                    <label for="introduction">自己紹介:</label>
                    <textarea id="introduction" name="introduction">This is my profile.</textarea>
                </div>
                <div class="form-group">
                    <label for="date_of_birth">誕生日:</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" value="1990-01-01">
                </div>
                <button type="submit" class="button">保存</button>
            </form>
        </div>
        <a href="/mypage">マイページに戻る</a>
    </div>

    <footer>
        &copy; 2023 MyPage
    </footer>
</body>
</html>
