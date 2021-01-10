@extends('layout')
@section('title','ログイン')
@section('content')
<div class="login-container">
  <div class="login-filter">
    <div class="login-wrap">
      <div class="login-header">
        ログイン
      </div>
        @if(session('coution'))
        <p class="action-danger">
          {{ session('coution') }}
        </p>
        @endif
        <div class="form-wrap">
          <form method="POST" action="{{ route('login') }}">
          @csrf
            <div class="form-texts">
              <label for="email" class="">メールアドレス</label>
              <div class="input-form add-email-sp">
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              </div>
              @error('email')
              <p class="exist-err" role="alert">
                <strong>{{ $message }}</strong>
              </p>
              @enderror
            </div>
            <div class="form-texts">
              <label for="password" class="">パスワード</label>
              <div class="input-form add-pass-sp">
                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <p class="exist-err" role="alert">
                  <strong>{{ $message }}</strong>
                </p>
                @enderror
              </div>
            </div>
            <div class="form-remember">
              <div class="">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                  ログインを記憶する
                </label>
              </div>
            </div>
            <div class="">
              <div class="form-remember">
                <button type="submit" class="login-btn">
                  ログイン
                </button>
              </div>
              <div class="other-link">
                @if (Route::has('password.request'))
                <a class="btn-space btn-link" href="{{ route('password.request') }}">
                  パスワードを忘れましたか？
                </a>
                @endif
                @if (Route::has('register'))
                  <a class="btn-space btn-link" href="{{ route('register') }}">会員登録する</a>
                @endif
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
