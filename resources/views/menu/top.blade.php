@extends('layout')
@section('title','メニューを決める')
@section('content')

@if (session('err_msg'))
  <p class="action-complete">
    {{ session('err_msg') }}
  </p>
@endif
<div class="top-all">
  <div class="top-wrap">
    <div class="top-title">
      <h1 >今日の食事は決まりましたか？</h1>
      <img src="{{ asset('images/top-image.jpeg') }}" alt="topImg" class="top-img">
    </div>
    <div class="top-middle">
      <h2>－ 提案 －</h2>
      <ul class="top-middle-list">
        <li>・献立に悩む時間、本当に必要ですか？</li>
        <li>・料理にストレスを感じていませんか？</li>
      </ul>
    </div>
    <div class="top-button">
      <button class="decide" type="button" name="button" onclick="location.href='{{ route('random') }}'">決める</button>
    </div>
  </div>
</div>

@endsection
