<!-- layout -->
<!DOCTYPE html>
<html>
<head>
    @yield('head')
</head>
<body>
<header>
<!--Navbar-->
<nav class="navbar navbar-light light-blue lighten-4">
  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">ミールでMeal</a>

  <!-- Collapse button -->
  <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
    aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
        class="fas fa-bars fa-1x"></i></span></button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">ユーザ設定</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ヘルプ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ログアウト</a>
      </li>
    </ul>
    <!-- Links -->

  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->

</header>
<div id="wrapper">
        @yield('content')
    </div>
</body>
</html>