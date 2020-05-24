<!-- layout -->
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS/style.css">
    @yield('head')
</head>
<body>
    <header>
        <h1 id="title">header 共通部分</h1>
        <button type=“button” onclick="location.href='/'">TopPage</button>
        <button type=“button” onclick="location.href='/setting'">SettingPage</button>
        <button type=“button” onclick="location.href='/foodrecode'">FoodRecodePage</button>
        <!-- <button type="button" onclick="history.back()">戻る</button> -->
    </header>
    <div id="wrapper">
        @yield('content')
    </div>
    <footer>
    <h1>footer 共通部分</h1>
    </footer>
</body>
</html>