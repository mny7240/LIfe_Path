<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="{{ asset('css/thing.css') }}">
</head>
<body>
    <header>
        <!--<img src="images/Life_Pathロゴ.jpg" alt="ヘッダー写真">-->
        <h1>Life Path</h1>
        <nav>
            <ul>
            <li><a href='/'><button>top</button></a></li>
            <li><a href='/diary'><button>日記</button></a></li>
            <li><a href='/thing'><button>欲しいもの</button></a></li>
            <li><a href='/place'><button>行きたいところ</button></a></li>
            </ul>
        </nav>
    </header>
    <h1>欲しいものリスト</h1>
    <a href='/'>戻る</a>
</body>
</html>
