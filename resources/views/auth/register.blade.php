@extends('layout')
@section('title','会員登録')
@section('content')
<div class="register-container">
  <div class="login-filter">
    <div class="login-wrap">
      <div class="login-header">
        会員登録
      </div>
        <div class="form-wrap">
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-texts">
              <label for="name" class="">名前</label>
              <div class="input-form add-name-sp">
                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <p class="exist-err" role="alert">
                  <strong>{{ $message }}</strong>
                </p>
                @enderror
              </div>
            </div>
            <div class="form-texts">
              <label for="email" class="">メールアドレス</label>
              <div class="input-form add-email-sp">
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <p class="exist-err" role="alert">
                  <strong>{{ $message }}</strong>
                </p>
                @enderror
              </div>
            </div>
            <div class="form-texts">
              <label for="password" class="">パスワード</label>
              <div class="input-form add-pass-sp">
                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <p class="exist-err" role="alert">
                  <strong>{{ $message }}</strong>
                </p>
                @enderror
              </div>
            </div>
            <div class="form-texts">
              <label for="password-confirm" class="">パスワード確認</label>
              <div class="input-form add-confirm-sp">
                <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password">
              </div>
            </div>
            <div class="">
              <div class="form-remember">
                <button type="submit" class="login-btn">
                会員登録
                </button>
              </div>
              <div class="other-link">
                @if (Route::has('login'))
                  <a class="btn-space btn-linkk" href="{{ route('login') }}">ログインする</a>
                @endif
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
