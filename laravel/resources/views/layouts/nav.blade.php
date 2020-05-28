<header>
<nav class="navbar fixed-top navbar-expand-lg navbar-light sticky-top scrolling-navbar border.border-0:" style="background-color: #fdd835;"> 
  <a class="navbar-brand font-weight-bold mr-auto" href="#"><strong>みーるでMEAL</strong></a>
  <a href="/" type="button" class="home fas fa-home"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="set fas fa-cog"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
      <span class="border.border-0"></span>
      <li class="nav-meal">
          <a class="nav-link font-weight-bold" href="#">みーる設定</a>
        </li>
        <span class="border.border-0"></span>
        <li class="nav-user">
          <a class="nav-link font-weight-bold" href="#">ユーザ設定</a>
        </li>
        <span class="border.border-0"></span>
        <li class="nav-help ">
          <a class="nav-link font-weight-bold" href="#">ヘルプ</a>
        </li>
        <span class="border.border-0"></span>
        <li class="nav-logaut">
          <button class="btn btn-link nav-link font-weight-bold" form="logout-button">ログアウト</button>
        </li>
      </ul>
      <form id="logout-button" method="POST" action="{{ route('logout') }}">
        @csrf
      </form>
    </div>
  </nav>
</header>
