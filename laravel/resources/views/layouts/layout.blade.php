<!-- layout -->
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS/style.css">
    @yield('head')
</head>
<body>
    <header>
        <h1 id="title">みーるでMeal</h1>
        <table>
        <tr>
        <td><button type=“button” onclick="location.href='/'">ホーム</button></td>
        <td><button type=“button” onclick="location.href='/setting'">設定</button></td>
        <td><button type=“button” onclick="location.href='/foodrecode'">食品登録</button></td>
        </tr>
        </table>
        <!-- <button type="button" onclick="history.back()">戻る</button> -->
    </header>
    <div id="wrapper">
        @yield('content')
    </div>
<!--     <footer>
    <h1>footer 共通部分</h1>
    </footer> -->
</body>
</html>