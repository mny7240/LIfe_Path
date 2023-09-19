<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    
    <title>Calendar</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth'
        });
        calendar.render();
    });
    </script>
</head>
<body>
    <div class='header'>
        <img action='images/Life_Pathロゴ.jpg'>
        <nav>
            <ul>
            <li><a href='/'><button>top</button></a></li>
            <li><a href='/diary'><button>日記作成</button></a></li>
            <li><a href='/thing'><button>欲しいもの</button></a></li>
            <li><a href='/place'><button>行きたいところ</button></a></li>
            </ul>
        </nav>
    </div>
    <!-- カレンダー本体 -->
    <div id='calendar'></div>
        <form method="POST" action="/store">
            @csrf
            <input type="text" name="title">
            <input type="date" name="start">
            <input type="color" name="textColor">
            <button type="submit">登録</button>
        </form>
    </div>


    <div class="todo-list">
        <h2>Todoリスト</h2>
                <!-- ここにTodoリストの内容を表示 -->
        </div>
        <!-- 予定追加ボタン -->
        <div class="add-event-button">
            <button>予定追加</button>
        </div>
    </div>
</body>
</html>
