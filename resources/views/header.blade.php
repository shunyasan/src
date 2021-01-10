<nav>
  <div class="header-all">
    <div class="">
      <a href="{{ route(('top')) }}" class="top-logo">
        <img src="{{ asset('imgLayout/AutoMenu_1.jpg') }}" alt="AutoMenu">
      </a>
    </div>
    <div class="header-top">
      <a href="{{ route('top') }}" class="top-menu">メニューを決める</a>
      <a href="{{ route('list') }}" class="top-menu">メニュー一覧</a>
      <a href="{{ route('create') }}" class="top-menu">メニュー追加</a>
      <a href="{{ route('favolist') }}" class="top-menu">お気に入り</a>
      @guest
        <a class="top-menu" href="{{ route('login') }}">ログイン</a>
      @if (Route::has('register'))
        <a class="top-menu" href="{{ route('register') }}">会員登録</a>
      @endif
      @else
        <a id="navbarDropdown" class="top-menu dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          ログアウト<span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          {{ Auth::user()->name }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    @endguest
    </div>
  </div>
</nav>
