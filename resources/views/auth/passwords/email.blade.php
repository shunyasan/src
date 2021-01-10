@extends('layout')
@section('title','パスワードリセット')
@section('content')
<div class="login-container">
  <div class="login-filter">
    <div class="login-wrap">
      <div class="login-header">
        パスワードをリセット
      </div>
      <div class="form-wrap">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
          @csrf
          <div class="form-texts">
            <label for="email" class="">メールアドレス</label>
              <div class="input-form add-email-sp">
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                  <p class="exist-err" role="alert">
                    <strong>{{ $message }}</strong>
                  </p>
                @enderror
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
