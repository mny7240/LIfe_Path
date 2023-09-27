@extends('layouts.app')

@section('content')
<head>
    <!-- index.cssの読み込み-->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <!--google material icons の読み込み-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
    <div class="container">

        <!-- 収支切り替えボタン -->
        <div class="switch">
            <button id="expensesBtn" class="custom-button">支出</button>
            <button id="incomeBtn" class="custom-button">収入</button>
        </div>

        <!-- メモ欄 -->
        <div class="memo">
            <label for="memo">メモ:</label>
            <textarea id="memo" rows="4"></textarea>
        </div>

        <!-- 金額入力欄 -->
        <div class="amount">
            <label for="amount">金額:</label>
            <input type="number" id="amount" placeholder="金額を入力してください">
        </div>

        <!-- カテゴリー選択ボタン -->
        <div class="category">
            <label for="category">カテゴリー</label>
            <table>
                <thead>
                    <tr><th></th><th></th><th></th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="category" onclick="selectCategory('category1')">
                                <span class="material-symbols-outlined big">
                                    restaurant
                                </span>
                            <p>食費</p>
                        </td>
                        <td>
                            <div class="category" onclick="selectCategory('category1')">
                                <span class="material-symbols-outlined big">
                                    checkroom
                                </span>
                            <p>衣類</p>
                            </div>
                        </td>
                        <td>
                            <div class="category" onclick="selectCategory('category1')">
                            <span class="material-symbols-outlined big">
                                water_bottle
                            </span>
                            <p>日用品</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="category" onclick="selectCategory('category1')">
                            <span class="material-symbols-outlined">
                                lens
                            </span>
                            <p>美容</p>
                        </td>
                        <td>
                            <div class="category" onclick="selectCategory('category1')">
                            <span class="material-symbols-outlined">
                                train
                            </span>
                            <p>交通費</p>
                            </div>
                        </td>
                        <td>
                            <div class="category" onclick="selectCategory('category1')">
                                <span class="material-symbols-outlined">
                                    electric_bolt
                                </span>
                            <p>光熱費</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="category" onclick="selectCategory('category1')">
                                <span class="material-symbols-outlined">
                                    phone_iphone
                                </span>
                            <p>携帯代</p>
                        </td>
                        <td>
                            <div class="category" onclick="selectCategory('category1')">
                                <span class="material-symbols-outlined">
                                    shopping_cart
                                </span>
                            <p>オンラインショッピング</p>
                            </div>
                        </td>
                        <td>
                            <div class="category" onclick="selectCategory('category1')">
                                <span class="material-symbols-outlined">
                                    hotel
                                </span>
                            <p>ホテル代</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- 確定ボタン -->
        <form action="">
            <div class="submit">
                <button id="submitBtn">確定</button>
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>

@endsection

@section('content2')
<head>
    <!-- index.cssの読み込み-->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <!--google material icons の読み込み-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
    
</body>
@endsection