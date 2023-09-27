<!DOCTYPE html>
<html>
<head>
    <title>Bootstrapレイアウトの例</title>
    <!-- Bootstrap CSSを読み込む -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid"> <!-- コンテナ全体を画面幅いっぱいに広げる -->
        <div class="row">
            <div class="col-md-12" style="background-color: #f0f0f0; height: 20vh;">
                <!-- 画面全体の上1/5のスペース -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-8" style="background-color: #e0e0e0; height: 80vh;">
                <!-- 画面全体の左から横8/12のスペース -->
            </div>
            <div class="col-md-4" style="background-color: #d0d0d0; height: 80vh;">
                <!-- 残りの右から4/12のスペース -->
            </div>
        </div>
    </div>

    <!-- BootstrapのJavaScriptとjQueryを読み込む -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
