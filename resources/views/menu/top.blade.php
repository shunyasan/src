@extends('layout')
@section('title','メニューを決める')
@section('content')

@if (session('err_msg'))
  <p class="action-complete">
    {{ session('err_msg') }}
  </p>
@endif
<div class="top-image">
  <div class="img-filter">
    <h1>今日の食事は決まりましたか？</h1>
  </div>
</div>
<div class="top-wrap">
  <div class="top-middle">
    <h2>－ 提案 －</h2>
    <ul class="top-middle-list">
      <li>・献立に悩む時間、本当に必要ですか？</li>
      <li>・料理にストレスを感じていませんか？</li>
    </ul>
  </div>
  <div class="top-button">
    <button class="decide" type="button" name="button" onclick="location.href='{{ route('random') }}'">
      献立を作成
    </button>
  </div>
</div>

@endsection
