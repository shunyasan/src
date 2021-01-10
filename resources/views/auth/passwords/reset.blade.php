@extends('layout')
@section('title','パスワードをリセット')
@section('content')
<div class="login-container">
  <div class="login-filter">
    <div class="login-wrap">
      <div class="login-header">
        パスワードをリセット
      </div>
      <div class="form-wrap">
        <form method="POST" action="{{ route('password.update') }}">
          @csrf
          <input type="hidden" name="token" value="{{ $token }}">
          <div class="form-texts">
            <label for="email" class="">メールアドレス</label>
          <div class="input-form add-email-sp">
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
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
                パスワードをリセット
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
